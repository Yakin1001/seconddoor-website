// Countdown timer setup
const launchDate = new Date('2024-12-31T00:00:00').getTime();

const updateTimer = () => {
    const now = new Date().getTime();
    const timeRemaining = launchDate - now;

    const days = Math.floor(timeRemaining / (1000 * 60 * 60 * 24));
    const hours = Math.floor((timeRemaining % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    const minutes = Math.floor((timeRemaining % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((timeRemaining % (1000 * 60)) / 1000);

    document.getElementById('days').textContent = days;
    document.getElementById('hours').textContent = hours;
    document.getElementById('minutes').textContent = minutes;
    document.getElementById('seconds').textContent = seconds;

    if (timeRemaining < 0) {
        clearInterval(timerInterval);
        document.getElementById('timer').textContent = 'We are live!';
    }
};