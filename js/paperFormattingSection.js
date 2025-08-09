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

   // Add click-to-flip functionality to all cards
    const flipCards = document.querySelectorAll('.card1');
    
    flipCards.forEach(card => {
        card.addEventListener('click', function(e) {
            e.stopPropagation(); // Prevent event bubbling
            this.classList.toggle('flipped');
            
            console.log('Card clicked, flipped:', this.classList.contains('flipped'));
        });
    });

    // Optional: Click outside to unflip
    document.addEventListener('click', function(e) {
        if (!e.target.closest('.container-card')) {
            flipCards.forEach(card => {
                card.classList.remove('flipped');
            });
        }
    });
});
