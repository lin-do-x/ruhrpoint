let cards = document.querySelectorAll('.card'); // Select all elements with the class 'card'
let cardsCount = cards.length; // Get the number of card elements
console.log(cards[1]); // Log the second card element

// Function to add a class to a specific card
function addClassToSpecificCard(index, classes) {
    if (index >= 0 && index < cardsCount) {
        cards[index].classList.add(classes);
    } else {
        console.error('Index out of bounds');
    }
}

// Function to remove a class from a specific card
function removeClassToSpecificCard(index, classes) {
    if (index >= 0 && index < cardsCount) {
        cards[index].classList.remove(classes);
    } else {
        console.error('Index out of bounds');
    }
}

// Function to shift the cards array to the left
function shiftCardsArray() {
    if (cardsCount > 1) {
        let firstCard = cards[0]; // Save the first element
        cards = [...cards].slice(1); // Remove the first element
        cards.push(firstCard); // Add the removed element to the end
    }
}

// Function to shift the cards array to the right
function reverseShiftCardsArray() {
    if (cardsCount > 1) {
        let lastCard = cards[cardsCount - 1]; // Save the last element
        cards = [lastCard, ...cards].slice(0, cardsCount); // Add the removed element to the beginning
    }
}

// Function to remove multiple classes from a card
function removeClassesFromCard(index, classes) {
    classes.forEach(cls => removeClassToSpecificCard(index, cls));
}

// Function to add multiple classes to a card
function addClassesToCard(index, classes) {
    classes.forEach(cls => addClassToSpecificCard(index, cls));
}

const leftClasses = ["left-[-400px]", "top-[200px]"];
const middleClasses = ["left-[50%]", "translate-x-[-50%]", "top-[200px]"];
const rightClasses = ["right-[-400px]", "top-[200px]"];

function left() {
    removeClassesFromCard(0, leftClasses);
    removeClassesFromCard(1, middleClasses);
    removeClassesFromCard(2, rightClasses);
    shiftCardsArray();
    addClassesToCard(0, leftClasses);
    addClassesToCard(1, middleClasses);
    addClassesToCard(2, rightClasses);
}

function right() {
    removeClassesFromCard(0, leftClasses);
    removeClassesFromCard(1, middleClasses);
    removeClassesFromCard(2, rightClasses);
    reverseShiftCardsArray();
    addClassesToCard(0, leftClasses);
    addClassesToCard(1, middleClasses);
    addClassesToCard(2, rightClasses);
}
