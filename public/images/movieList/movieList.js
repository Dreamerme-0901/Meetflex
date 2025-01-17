const BASE_URL = "https://webdev.alphacamp.io";
const INDEX_URL = BASE_URL + "/api/movies/";
const POSTER_URL = BASE_URL + "/posters/";
const dataPanel = document.querySelector("#data-panel");
const searchForm = document.querySelector("#search-form");
const searchInput = document.querySelector("#search-input");
const paginator = document.querySelector("#paginator");
const cardMode = document.querySelector("#cardMode");
const listMode = document.querySelector("#listMode");
let page = 1;
const movies = [];
let filteredMovies = [];
let moviesListPattern = "";
const MOVIES_PER_PAGE = 12;

axios
  .get(INDEX_URL)
  .then((response) => {
    movies.push(...response.data.results);
    moviesListPattern = "cardMode";
    console.log(movies);
    renderPaginator(movies.length);
    renderMovieList(getMoviesByPage(page), moviesListPattern);
  })
  .catch((err) => console.log(err));

function renderMovieList(data, pattern) {
  let rawHTML = "";

  if (pattern === "cardMode") {
    data.forEach((item) => {
      // title, image
      rawHTML += `<div class="col-sm-3">
    <div class="mb-2">
      <div class="card">
        <img src="${
          POSTER_URL + item.image
        }" class="card-img-top" alt="Movie Poster">
        <div class="card-body">
          <h5 class="card-title">${item.title}</h5>
        </div>
        <div class="card-footer">
          <button class="btn btn-primary btn-show-movie" data-bs-toggle="modal" data-bs-target="#movie-modal" data-id="${
            item.id
          }">More</button>
          <button class="btn btn-info btn-add-favorite" data-id="${
            item.id
          }">+</button>
        </div>
      </div>
    </div>
  </div>`;
    });
  }

  if (pattern === "listMode") {
    rawHTML += '<ul class="list-group list-group-flush">';
    data.forEach((item) => {
      rawHTML += `<li class="list-group-item d-flex justify-content-between align-items-end">${item.title}<div>
          <button class="btn btn-primary btn-show-movie" data-bs-toggle="modal" data-bs-target="#movie-modal" data-id="${item.id}">More</button>
          <button class="btn btn-add-favorite" data-id="${item.id}" style="background-color: #1195ae; border-color: #1195ae;color: white;">+</button>
        </div></li>`;
    });
    rawHTML += "</ul>";
  }

  dataPanel.innerHTML = rawHTML;
}

function showMovieModal(id) {
  const modalTitle = document.querySelector("#movie-modal-title");
  const modalImage = document.querySelector("#movie-modal-image");
  const modalDate = document.querySelector("#movie-modal-date");
  const modalDescription = document.querySelector("#movie-modal-description");

  axios.get(INDEX_URL + id).then((response) => {
    const data = response.data.results;
    modalTitle.innerText = data.title;
    modalDate.innerText = "Release date: " + data.release_date;
    modalDescription.innerText = data.description;
    modalImage.innerHTML = `<img src="${
      POSTER_URL + data.image
    }" alt="movie-poster" class="img-fluid">`;
  });
}

function addToFavorite(id) {
  const list = JSON.parse(localStorage.getItem("favoriteMovies")) || [];
  const movie = movies.find((movie) => movie.id === id);

  if (list.some((movie) => movie.id === id)) {
    return alert("此電影已經在收藏清單中！");
  }

  list.push(movie);
  localStorage.setItem("favoriteMovies", JSON.stringify(list));
}

function getMoviesByPage(page) {
  const data = filteredMovies.length ? filteredMovies : movies;
  const starIndex = (page - 1) * MOVIES_PER_PAGE;

  return data.slice(starIndex, starIndex + MOVIES_PER_PAGE);
}

function renderPaginator(amount) {
  const numberOfPages = Math.ceil(amount / MOVIES_PER_PAGE);
  let rawHTML = "";

  for (let page = 1; page <= numberOfPages; page++) {
    rawHTML += `<li class="page-item"><a class="page-link" href="#" data-page="${page}">${page}</a></li>`;
  }
  paginator.innerHTML = rawHTML;
}

dataPanel.addEventListener("click", function onPanelClicked(event) {
  if (event.target.matches(".btn-show-movie")) {
    showMovieModal(Number(event.target.dataset.id));
  } else if (event.target.matches(".btn-add-favorite")) {
    addToFavorite(Number(event.target.dataset.id));
  }
});

searchForm.addEventListener("click", function onSearchFormSubmitted(event) {
  event.preventDefault();
  const keyword = searchInput.value.trim().toLowerCase();

  filteredMovies = movies.filter((movie) =>
    movie.title.toLowerCase().includes(keyword)
  );

  if (filteredMovies.length == 0) {
    return alert(`您輸入的關鍵字：${keyword} 沒有符合條件的電影`);
  }

  renderPaginator(filteredMovies.length);
  renderMovieList(getMoviesByPage(page), moviesListPattern);
});

paginator.addEventListener("click", function onPaginatorClicked(event) {
  if (event.target.tagName !== "A") return;

  page = Number(event.target.dataset.page);
  renderMovieList(getMoviesByPage(page), moviesListPattern);
});

cardMode.addEventListener("click", (event) => {
  moviesListPattern = event.target.dataset.id;

  renderMovieList(getMoviesByPage(page), moviesListPattern);
});

listMode.addEventListener("click", (event) => {
  moviesListPattern = event.target.dataset.id;

  renderMovieList(getMoviesByPage(page), moviesListPattern);
});
