
  // on définit la constante regroupant tous nos boutons 
  const deleteButtons = document.querySelectorAll('.deletePhotos');

  console.log(deleteButtons);

  // nous ajoutons un écouteur d'événement sur chaque bouton à l'aide du foreach
  deleteButtons.forEach(element => {
    element.addEventListener('click', function () {
      console.log('coucou');
      // Nous allons recupérer les valeurs via les datas inclus dans chaque bouton
      // Nous modifions la valeur des span à l'aide de innerHTML
      modalImage.setAttribute('src',`../assets/img/gallery/${element.dataset.delImage}`);
      // Nous attribuons la valeur de l'id du rdv pour supprimer le rdv
      deleteBtn.value = element.dataset.delId;

    })
  });