// wait until DOM is ready
document.addEventListener("DOMContentLoaded", function(event) {
  //wait until images, links, fonts, stylesheets, and js is loaded
  window.addEventListener("load", function(e) {
    /* Prüfen ob der Browser die native Share API unterstützt */
    if (navigator.share) {
      const shareButtons = document.querySelectorAll('.navigator-share-api');
      /* Alle Share Buttons anzeigen und Klick Event für das Sharen hinzufügen */
      shareButtons.forEach(shareButton => {
        shareButton.style.display = 'inline-block';
        shareButton.addEventListener('click', async () => {
          try {
            await navigator.share({
              title: shareButton.getAttribute('data-title'),
              text: shareButton.getAttribute('data-text'),
              url: shareButton.getAttribute('data-url')
            });
          } catch (error) {
            console.error('Error sharing:', error);
          }
        });
      });
    }

    /* Fallback Sharing einrichten */
    function popUpShare(sharingURL) {
      // Open a new pop-up window with the sharing URL.
      window.open(sharingURL, 'CustomShareWindow', 'width=500, height=400, left=400, top=100');
    }

    const classicShareButtons = document.querySelectorAll('.classic-share a');
    classicShareButtons.forEach(classicShareButton => {
      classicShareButton.addEventListener('click', (e) => {
        e.preventDefault();
        popUpShare(classicShareButton.href);
      });
    });
   }, false);
} );