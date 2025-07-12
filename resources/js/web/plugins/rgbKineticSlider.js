// rgbKineticSlider.js
import * as THREE from 'three';
import gsap from 'gsap';

class RGBKineticSlider {
  constructor(options = {}) {
    // 默认参数
    const {
      slideImages = [],                       // [ 'img1.jpg', 'img2.jpg', ... ]
      backgroundDisplacementSprite = '',      // 位移贴图路径
      canvasId = 'webgl-slider',               // canvas 元素 id
      width = window.innerWidth,
      height = window.innerHeight,
      cursorScaleIntensity = 0.25,            // 鼠标最大偏移强度
      cursorMomentum = 0.14,                  // 鼠标平滑系数 (0—1)
      transitionDuration = 1.2,               // 过渡时长
    } = options;

    // 基本状态
    this.images = slideImages;
    this.dispImg = backgroundDisplacementSprite;
    this.currentIndex = 0;
    this.isAnimating = false;
    this.cursorScaleIntensity = cursorScaleIntensity;
    this.cursorMomentum = cursorMomentum;
    this.transitionDuration = transitionDuration;

    // mouse: 目标位置； smoothedMouse：平滑后用于 shader
    this.rawMouse = new THREE.Vector2(0.5, 0.5);
    this.smoothedMouse = this.rawMouse.clone();
    this.prevSmoothedMouse = this.rawMouse.clone();

    // 初始化 three
    this.canvas = document.getElementById(canvasId);
    this.renderer = new THREE.WebGLRenderer({ canvas: this.canvas, alpha: true });
    this.renderer.setSize(width, height);
    this.scene = new THREE.Scene();
    this.camera = new THREE.OrthographicCamera(-1, 1, 1, -1, 0, 1);

    // 贴图加载
    const loader = new THREE.TextureLoader();
    this.textures = this.images.map(src => loader.load(src));
    this.displacement = loader.load(this.dispImg);
    this.displacement.wrapS = this.displacement.wrapT = THREE.RepeatWrapping;

    // Shader 材质
    this.material = new THREE.ShaderMaterial({
      uniforms: {
        uTexture1: { value: this.textures[0] },
        uTexture2: { value: this.textures[1] },
        uDisp:      { value: this.displacement },
        uProgress:  { value: 0 },
        uResolution:{ value: new THREE.Vector2(width, height) },
        uMouse:     { value: this.smoothedMouse.clone() },
        uHover:     { value: 0 },
      },
      vertexShader: `
        varying vec2 vUv;
        void main() {
          vUv = uv;
          gl_Position = vec4(position,1.0);
        }
      `,
      fragmentShader: `
        varying vec2 vUv;
        uniform sampler2D uTexture1;
        uniform sampler2D uTexture2;
        uniform sampler2D uDisp;
        uniform float uProgress;
        uniform vec2 uMouse;
        uniform float uHover;

        void main() {
          // 基础位移
          vec2 disp = texture2D(uDisp, vUv).rg * 2.0 - 1.0;

          // 过渡时两张图的 UV
          vec2 uv1 = vUv + disp * uProgress * 0.2;
          vec2 uv2 = vUv - disp * (1.0 - uProgress) * 0.2;

          // RGB 拆分偏移
          float strength = uHover * ${cursorScaleIntensity.toFixed(2)};
          vec2 rUV = vUv + disp * strength;
          vec2 gUV = vUv;
          vec2 bUV = vUv - disp * strength;

          // 采样第一张图的三个通道
          vec4 c1r = texture2D(uTexture1, rUV);
          vec4 c1g = texture2D(uTexture1, gUV);
          vec4 c1b = texture2D(uTexture1, bUV);
          vec4 col1 = vec4(c1r.r, c1g.g, c1b.b,1.0);

          // 采样第二张图（无 rgb 拆分，用原 UV2）
          vec4 col2 = texture2D(uTexture2, vUv);

          // 混合两张图
          vec4 mixed = mix(col1, col2, smoothstep(0.0,1.0,uProgress));
          gl_FragColor = mixed;
        }
      `,
    });

    // 平面
    const geo = new THREE.PlaneGeometry(2, 2);
    this.mesh = new THREE.Mesh(geo, this.material);
    this.scene.add(this.mesh);

    // 渲染循环
    this.renderer.setAnimationLoop(this.render.bind(this));

    // 事件
    this.canvas.addEventListener('mousemove', this.onMouseMove.bind(this));
    document.addEventListener('click', this.nextSlide.bind(this));
  }

  render() {
    // 鼠标平滑插值
    this.smoothedMouse.lerp(this.rawMouse, this.cursorMomentum);

    // 速度驱动 hover 强度
    const dx = this.smoothedMouse.x - this.prevSmoothedMouse.x;
    const dy = this.smoothedMouse.y - this.prevSmoothedMouse.y;
    const speed = Math.sqrt(dx*dx + dy*dy);
    this.material.uniforms.uHover.value = speed;

    // 更新 shader mouse
    this.material.uniforms.uMouse.value.copy(this.smoothedMouse);
    this.prevSmoothedMouse.copy(this.smoothedMouse);

    this.renderer.render(this.scene, this.camera);
  }

  nextSlide() {
    if (this.isAnimating || this.textures.length < 2) return;
    this.isAnimating = true;

    const next = (this.currentIndex + 1) % this.textures.length;
    this.material.uniforms.uTexture1.value = this.textures[this.currentIndex];
    this.material.uniforms.uTexture2.value = this.textures[next];
    this.material.uniforms.uProgress.value = 0;

    gsap.to(this.material.uniforms.uProgress, {
      value: 1,
      duration: this.transitionDuration,
      ease: 'power2.inOut',
      onComplete: () => {
        this.currentIndex = next;
        this.isAnimating = false;
      }
    });
  }

  onMouseMove(e) {
    const rect = this.canvas.getBoundingClientRect();
    this.rawMouse.x = (e.clientX - rect.left) / rect.width;
    this.rawMouse.y = 1.0 - (e.clientY - rect.top) / rect.height;
  }
}

export default RGBKineticSlider;
