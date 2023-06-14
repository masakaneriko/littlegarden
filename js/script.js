//GSAP Register Plugins
gsap.registerPlugin(ScrollTrigger);

gsap.from(".intro-text", {
    opacity: 0,
    duration: 0.9,
    y: 100,
    // delay: 1,
    autoAlpha: 0,
});


gsap.from(".fadein-up", {
    scrollTrigger: {
        trigger: ".fadein-up",
        start: "top 85%",
        // markers: true,
        // toggleActions: "play none none reset"
    },
    opacity: 0,
    y: 100,
    duration: 1,
});