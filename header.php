<style>
    .search-bar {
      position: relative;
    }
    /* Search bar with search icon */
    .search-bar input[type="text"] {
      width: 650px;
      padding-left: 40px; 
      background-image: url('Images/Header/search.png'); 
      background-repeat: no-repeat;
      background-position: 10px center; 
      background-size: 20px; 
    }
    /* For bring to front the button inside of search bar */ 
    .search-bar button {
      position: absolute;
      right: 0px;
      z-index: 1;
    }
    .btn-forum,
    .btn-login {
      background-color: white;
      border: 1px solid #E0E0E0;
      color: #333;
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
      .search-bar {
        width: 100%;
        max-width: none;
      }
      .search-bar input[type="text"] {
        width: calc(100% - 90px);
        border: none;
        margin-left: 200px;
      }
      .go{
        display: none;
      }
    }
    
    /* Ensuring UI elements stay inside screen */
    @media (max-width: 576px) {
      .container {
        padding-left: 5px;
        padding-right: 5px;
      }
    }
    
  </style>
  
<div class="container">
    <header class="bg-white text-light py-3">
      <div class="container d-flex justify-content-between align-items-center">
        <!-- Logo and Search Bar -->
        <div class="logo-search d-flex align-items-center">
          <img src="Images/Header/logo.png" alt="Logo" height="40">
          <div class="search-bar ml-3 position-relative d-flex align-items-center">
            <input type="text" class="form-control" placeholder="Find a recipe">
            <button class="btn btn-primary ml-2 go">Go</button>
          </div>
        </div>
        <!-- Forum Button -->
        <button class="btn btn-forum btn-light">
          <img src="Images/Header/forum.png" alt="Forum" height="30"> Forum
        </button>
        <!-- Login Button with User Icon -->
        <button class="btn btn-login btn-light">
          <img src="Images/Header/user.png" alt="User" height="30"> Login
        </button>
      </div>
    </header>
  </div>
