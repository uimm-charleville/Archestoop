const points = document.getElementById('points');
const coin = document.getElementById('coin');
const elementsPoint = document.querySelectorAll('.elementPoint');

let totalPoints = 0;

elementsPoint.forEach(element => {
  element.addEventListener('click', () => {
    const pointsToAdd = parseInt(element.getAttribute('data-points'));
    totalPoints += pointsToAdd;
    points.innerText = totalPoints;
  });
});

points.addEventListener('click', () => {
  totalPoints = 0;
  points.innerText = totalPoints;
});