(function () {
  const liste_categories = document.querySelectorAll('.liste_categories li');
  console.log(liste_categories.length, liste_categories.length);
  liste_categories.forEach((categorie) => {
    
    categorie.addEventListener("mousedown", (e) => {
      console.log(categorie.dataset.id)
    })

  });
  const categoryId = 3; // Remplacez par l'ID de la catégorie souhaitée
  
  const domaine = document.querySelector("base").href;
  const apiUrl = `${domaine}/wp-json/wp/v2/posts?categories=${categoryId}`;
  console.log("apiUrl = ", apiUrl);
  fetch(apiUrl)
    .then((response) => response.json())
    .then((data) => {
      const destinationList = document.querySelector(".destination__liste");
      data.forEach((article) => {
        const articleElement = document.createElement("div");
        articleElement.innerHTML = `
                    <div class="destination__div">
                    <h4>${article.title.rendered}</h4>
                    <div>${article.excerpt.rendered}</div>
                    <a href="${article.link}">Lire plus</a>
                    </div>
                `;
        destinationList.appendChild(articleElement);
      });
    })
    .catch((error) =>
      console.error("Erreur lors de la récupération des articles:", error)
    );
})();
