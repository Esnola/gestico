/*
import {gsap} from "gsap";
import {SplitText} from "gsap/SplitText";

gsap.registerPlugin(SplitText);
/!*

const split = SplitText.create("[data-animated-paragraph]", {type: "words"});

// Style each word with a white overlay
split.words.forEach(w => {
    w.style.backgroundImage = "linear-gradient(#fff, #fff)";
    w.style.backgroundSize = "100% 100%";
    w.style.backgroundRepeat = "no-repeat";
    w.style.color = "transparent";
    w.style.padding = "2px 4px";
    w.style.borderRadius = "2px";
});

const tl = gsap.timeline();
split.words.forEach((w, i) => {
    tl.to(w, {backgroundSize: "0% 100%", duration: 0.2, ease: "power2.in"}, i * 0.08)
        .to(w, {color: "", duration: 0.15}, i * 0.08 + 0.05);
});
*!/
*/
