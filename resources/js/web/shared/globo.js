export const initGlobo = () => {
  const globo = document.getElementById("globo");

  // Intersection Observer setup
  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          // Globo is visible
          globo.style.opacity = "1";
        } else {
          // Globo is not visible
          globo.style.opacity = "0.5";
        }
      });
    },
    {
      threshold: 0.1, // Trigger when at least 10% is visible
    }
  );

  if (globo) {
    observer.observe(globo);
  }

  window.onpointermove = (event) => {
    const { clientX, clientY } = event;

    globo.animate(
      {
        left: `${clientX}px`,
        top: `${clientY}px`,
      },
      { duration: 5000, fill: "forwards" }
    );
  };
};
