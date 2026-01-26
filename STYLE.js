document.addEventListener("DOMContentLoaded", function () {

    // Soft fade-in effect
    document.querySelectorAll(".main-content, .chapters").forEach((el, i) => {
        el.style.opacity = "0";
        el.style.transform = "translateY(20px)";
        el.style.transition = "all 0.8s ease";

        setTimeout(() => {
            el.style.opacity = "1";
            el.style.transform = "translateY(0)";
        }, 200 * i);
    });

});

// Restricted words list
const bannedWords = [
    "bitch",
    "slut",
    "whore",
    "fuck",
    "kill yourself",
    "better you die",
    "die",
    "idiot",
    "stupid"
];

function containsBannedWords(text) {
    const lower = text.toLowerCase();
    return bannedWords.some(word => lower.includes(word));
}
