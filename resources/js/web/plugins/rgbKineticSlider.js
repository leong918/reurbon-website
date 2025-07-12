// rgbKineticSlider.js
import * as THREE from 'three';
import gsap from 'gsap';

class RGBKineticSlider {
  constructor(options = {}) {
    const {
      slideImages = [],                       // [ 'img1.jpg', 'img2.jpg', ... ]
      backgroundDisplacementSprite = '',      // 位移贴图路径
      canvasId = 'webgl-slider',              // canvas 元素 id
      width = window.innerWidth,
      height = window.innerHeight,
      cursorScaleIntensity = 0.25,            // 鼠标最大偏移强度
      cursorMomentum = 0.14,                  // 鼠标平滑系数 (0—1)
      transitionDuration = 1.2,               // 切换过渡时长（秒）
      mirageFreq = 10.0,                      // 海市蜃楼波浪频率
      mirageAmp = 0.01,                       // 海市蜃楼振幅
      mirageSpeed = 5.0,                      // 海市蜃楼动画速率
    } = options;

    this.images = slideImages;
    this.dispImg = backgroundDisplacementSprite;
    this.currentIndex = 0;
    this.isAnimating = false;
    this.cursorScaleIntensity = cursorScaleIntensity;
    this.cursorMomentum = cursorMomentum;
    this.transitionDuration = transitionDuration;
    this.mirageFreq = mirageFreq;
    this.mirageAmp = mirageAmp;
    this.mirageSpeed = mirageSpeed;

    this.rawMouse = new THREE.Vector2(0.5, 0.5);
    this.smoothedMouse = this.rawMouse.clone();
    this.prevSmoothedMouse = this.rawMouse.clone();
    this.clock = new THREE.Clock();

    this.canvas = document.getElementById(canvasId);
    this.renderer = new THREE.WebGLRenderer({ canvas: this.canvas, alpha: true });
    this.renderer.setSize(width, height);

    this.scene = new THREE.Scene();
    this.camera = new THREE.OrthographicCamera(-1, 1, 1, -1, 0, 1);

    const loader = new THREE.TextureLoader();
    this.textures = this.images.map(src => loader.load(src));
    this.displacement = loader.load(this.dispImg);
    this.displacement.wrapS = this.displacement.wrapT = THREE.RepeatWrapping;

    this.material = new THREE.ShaderMaterial({
      uniforms: {
        uTexture1: { value: this.textures[0] },
        uTexture2: { value: this.textures[1] },
        uDisp:      { value: this.displacement },
        uProgress:  { value: 0 },
        uResolution:{ value: new THREE.Vector2(width, height) },
        uMouse:     { value: this.smoothedMouse.clone() },
        uHover:     { value: 0 },
        uTime:      { value: 0 },
        uMirageFreq:{ value: this.mirageFreq },
        uMirageAmp: { value: this.mirageAmp },
        uMirageSpeed:{ value: this.mirageSpeed },
        uScaleIntensity: { value: this.cursorScaleIntensity },
      },
      vertexShader: `
        varying vec2 vUv;
        void main() {
          vUv = uv;
          gl_Position = vec4(position, 1.0);
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
        uniform float uTime;
        uniform float uMirageFreq;
        uniform float uMirageAmp;
        uniform float uMirageSpeed;
        uniform float uScaleIntensity;

        void main() {
          vec2 disp = texture2D(uDisp, vUv).rg * 2.0 - 1.0;
          vec2 uv1 = vUv + disp * uProgress * 0.2;
          vec2 uv2 = vUv - disp * (1.0 - uProgress) * 0.2;

          float strength = uHover * uScaleIntensity;

          vec2 rUV = vUv + disp * strength;
          vec2 gUV = vUv;
          vec2 bUV = vUv - disp * strength;

          float wave = sin(vUv.y * uMirageFreq + uTime * uMirageSpeed)
                       * uMirageAmp
                       * uHover;
          vec2 mirageOffset = vec2(0.0, wave);

          uv1 += mirageOffset;
          uv2 += mirageOffset;
          rUV += mirageOffset;
          gUV += mirageOffset;
          bUV += mirageOffset;

          vec4 c1r = texture2D(uTexture1, rUV);
          vec4 c1g = texture2D(uTexture1, gUV);
          vec4 c1b = texture2D(uTexture1, bUV);
          vec4 col1 = vec4(c1r.r, c1g.g, c1b.b, 1.0);

          vec4 col2 = texture2D(uTexture2, uv2);
          float t = smoothstep(0.0, 1.0, uProgress);
          gl_FragColor = mix(col1, col2, t);
        }
      `,
    });

    const geo = new THREE.PlaneGeometry(2, 2);
    this.mesh = new THREE.Mesh(geo, this.material);
    this.scene.add(this.mesh);

    this.renderer.setAnimationLoop(this.render.bind(this));

    this.canvas.addEventListener('mousemove', this.onMouseMove.bind(this));
    document.addEventListener('click', this.nextSlide.bind(this));
  }

  render() {
    this.material.uniforms.uTime.value = this.clock.getElapsedTime();
    this.smoothedMouse.lerp(this.rawMouse, this.cursorMomentum);

    const dx = this.smoothedMouse.x - this.prevSmoothedMouse.x;
    const dy = this.smoothedMouse.y - this.prevSmoothedMouse.y;
    const speed = Math.sqrt(dx * dx + dy * dy);
    this.material.uniforms.uHover.value = speed;

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

window.rgbKineticSlider = options => new RGBKineticSlider(options);
export default RGBKineticSlider;
