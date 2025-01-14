<style>
    nav .bar{
    display: none;
}
nav{
    padding-top: 20px;
    position: absolute;
    top: 0;
    width: 100%;
    z-index: 3;
    /* background: linear-gradient(to top, #33333311 20%, #33333346); */
    color: #ffffff;
}
nav .menus{
    width: 100%;
    display: flex;
    justify-content: space-around;
    align-items: center;
}
nav .sign{
    background-color: white;
    color: black;
    padding: 10px 30px 10px 30px;
    border-radius: 20px;
}
nav img{
    height: 80px;
}

nav .menu{
    display: flex;
    gap: 3rem;
    padding: 10px 30px 10px 30px;
    border-radius: 20px;
    background: rgba(255, 255, 255, 0.15); /* Transparent effect */
  backdrop-filter: blur(10px); /* Blurred background */
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  margin-right: 5rem;
}
nav a{
    text-decoration: none;
    color: white;
}
nav .menu a:hover{
    border-bottom: 1px solid white;
       transition: 0.3s ; 
}
#home{
    align-items: center;
    display: flex;
    justify-content: space-between;
    width: 100%;
}

.header-content .search{
    display: flex;
    gap: 2rem;
    padding: 10px 30px 10px 30px;
    border-radius: 20px;
    background: rgba(255, 255, 255, 0.15); /* Transparent effect */
  backdrop-filter: blur(10px); /* Blurred background */
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  justify-content: center;
  max-width: max-content;
  margin: auto;
  margin-top: 30px;
}
.header-content select{
    font-size: 16px;
    padding: 5px 20px 5px 20px;
    background: none;
    border: none;
    color: white;

}
.header-content .item{
    border-right: 1px solid white;
    padding-right: 20px;
}
.header-content button{
    padding: 10px 30px 10px 30px;
    border-radius: 20px;
    background-color: white;
    border: none;
}


header{
    background-image: url('/assets-landingpage/img/1.jpg');
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    width: 100%;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    color: #fff;
}
.header-content{
    text-align: center;
}
.header-content p{
    font-size: 24px;
    margin: 10px;
}
.header-content h1{
    font-size: 64px;
    margin: 0px;
}
header input[type="date"]::-webkit-calendar-picker-indicator {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    width: auto;
    height: auto;
    color: none;
    background: none;
}
header input{
    background: none;
    border: none;
    color: white;
    text-align: center;
    padding-top: 5px;
}
option{
    background-color: rgba(28,41,48,1.00);
}
</style>
<section id="home">
    <nav>
        <div class="menus">
            <h2>
                <a href="#">
                    INDOTRAVI
                </a>
            </h2>
            <div class="menu">
                <a href="/#home" class="list">Home</a>
                <a href="/#tour" class="list">Tour</a>
                <a href="/#services" class="list">Services</a>
                <a href="/#tourpackages" class="list">Tour Package</a>
                <a href="/#blog" class="list">Blog</a>
                <a href="/destinations" class="list">Destinations</a>
            </div>
            <a class="sign" href="/login">
                Login
            </a>
            <div class="bar" id="bar">
                <i class="fa-solid fa-bars"></i>
            </div>
        </div>
    </nav>
    <header class="v-header">
        <div class="header-content">
            <h1>Extraordinary natural and <br> cultural charm</h1>
            <p>Exploring Indonesia is an unforgettable adventure</p>
            <form action="/destinations" method="get">
            <div class="search">
                <div class="item">
                    <i class="fa-solid fa-calendar-days"></i>
                   <input type="date" name="date" value="{{ request()->get('date') }}">
                </div>
                <div class="item">
                    <i class="fa-solid fa-wallet"></i>
                    <select name="budget" id="">
                        <option value="">Budget</option>
                        <option value="low-to-high" {{ request()->get('budget') == 'low-to-high' ? 'selected' : '' }}>Low to high</option>
                        <option value="high-to-low" {{ request()->get('budget') == 'high-to-low' ? 'selected' : '' }}>High to low</option>
                    </select>
                </div>
                <div class="submit-search">
                    <button type="submit">Search</button>
                </div>
            </form>

            </div>
        </div>
    </header>
</section>
