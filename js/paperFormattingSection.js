document.addEventListener('DOMContentLoaded', () => {
  const cards = document.querySelectorAll('[id^="cardPaper"]');
  const buttons = document.querySelectorAll('.paperFormatting-btn');

  // show first by default
  cards.forEach((c, i) => c.style.display = i === 0 ? 'block' : 'none');

  buttons.forEach(btn => {
    btn.addEventListener('click', (e) => {
      e.preventDefault();
      // clear active state
      buttons.forEach(b => b.classList.remove('active'));
      // hide all
      cards.forEach(c => c.style.display = 'none');

      // show targeted card
      const sel = btn.dataset.target;
      const card = document.querySelector(sel);
      if (card) card.style.display = 'block';

      btn.classList.add('active');
    });
  });
});
