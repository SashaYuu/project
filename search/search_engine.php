<!DOCTYPE html>
<html>

<script src="https://kit.fontawesome.com/e8fa2e31b4.js" crossorigin="anonymous"></script>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'poppins', sans-serif;
        font-size: 18px;
    }

    body {
        margin: 4vh;
    }

    .container {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .sidebar {
        width: 25%;
        border: 1px solid #eee;
        border-radius: 3px;
        padding: 15px;
        height: 92vh;
        box-shadow: 0px 0px 3px gray;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .fa-circle {
        color: orangered;
    }

    .searchBar {
        width: 100%;
        background-color: #eee;
        border-radius: 3px;
        padding: 9px;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    input {
        border: none;
        outline: none;
        background: none;
    }

    .glass:hover {
        color: orangered;
        cursor: pointer;
    }

    .social-icons {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .fa-brands {
        font-size: 25px;
        margin: 0 10px;
        color: #333;
        cursor: pointer;
    }

    .fa-brands:hover {
        color: orangered;
    }

    .data {
        width: 73%;
        border-radius: 3px;
        height: 92vh;
        overflow-y: auto;
    }

    .top {
        height: 60px;
        border-radius: 3px;
        background-color: #eee;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 15px;
    }

    .brandName {
        width: 80px;
        float: left;
        margin-top: 5px;
        color: #0e0e0e;
        font-weight: 300;
        font-size: 30px;
        margin-left: -300px;

    }


    .brandName span {
        font-size: 55px;
        color: #ff5200;
        font-weight: 400;
    }

    .brandName a {
        text-decoration: none;
        color: #333;
        cursor: pointer;
    }

    .header {
        height: 57px;
        border-radius: 56px;
        background-color: #333;
        margin: 3vh 6px;
        padding: 22px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .upper {
        color: #0e0e0e;
        font-weight: 300;
        font-size: 30px;


    }

    .header p {
        font-size: 40px;
        font-weight: bold;
        color: white;
        margin-left: 183px;
    }

    #root {
        width: 100%;
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        grid-gap: 20px;
    }

    .box {
        margin: 1px;
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
        border: 3px solid #333;
        border-radius: 5px;
        padding: 15px;
        height: auto;
        /* or set a fixed height that accommodates the content */
        overflow: hidden;
        /* or use 'auto' to add scrollbars if needed */
        align-items: center;
    }

    .img-box {
        width: 100%;
        height: 176px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .mainMenuItems ul li a {
        text-decoration: none;
        padding: -10px -12px;
        color: whitesmoke;
        font-size: 20px;
        font-weight: 500;
        display: block;
        font-family: Roboto;
        letter-spacing: 1px;
        transition: 0.3s;
        text-align: -webkit-match-parent;

    }

    .images {
        max-height: 70%;
        max-width: 85%;
        object-fit: cover;
        object-position: center;
        margin-top: -33px;
    }

    .primaryWrapper {
        display: table;
        width: 100%;
    }

    .menu {
        width: 100%;
        float: left;
        background-color: #ffffff;

    }

    .mainMenuItems {
        float: right;
        overflow: hidden;
    }

    #primaryMenu {
        position: sticky;
        top: 0;
        left: 0;
        width: 100%;
    }

    .bottom {
        margin-top: 20px;
        width: 100%;
        text-align: center;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: space-between;
        height: 110px;
    }



    h2 {
        font-size: 20px;
        color: orangered;
    }

    button {
        width: 100%;
        position: relative;
        border: none;
        border-radius: 5px;
        background-color: #333;
        padding: 7px 25px;
        cursor: pointer;
        color: white;
    }

    button:hover {
        background-color: orangered;
    }

    ::-webkit-scrollbar {
        display: none;
    }
</style>


</head>

<body>



    <div class="container">
        <div class="sidebar">
            <div class="sidehead">
                <div class="dots">
                    <i class="fa-solid fa-circle"></i>
                    <i class="fa-solid fa-circle" style="color: #333;"></i>
                    <i class="fa-solid fa-circle"></i>
                </div>
                <hr style="margin: 15px 0; border: 1px solid #eee">
            </div>
            <div class="sidebody" style="height: 69vh;">
                <div class="searchBar">
                    <input placeholder="Search..." id="searchBar" name="searchBar" type="text">
                    <i class="fa-solid fa-magnifying-glass glass" id="btn"></i>
                </div>
            </div>
            <div class="sidefoot">
                <hr style="margin: 15px 0; border: 1px solid #eee">
                <div class="social-icons">
                    <i class="fa-brands fa-square-facebook"></i>
                    <i class="fa-brands fa-youtube"></i>
                    <i class="fa-brands fa-square-github"></i>
                </div>
            </div>

        </div>
        <div class="data">

            <div class="primaryWrapper">
                <div class="mainMenuItems ul li a">
                </div>
            </div>
            <div class="header">
                <div class="brandName"> <a href="index.php">
                        <p><span>S</span>UMO</p>

                    </a></div>
                <div class="primaryWrapper">
                    <div class="mainMenuItems ul li a">
                        <ul>
                            <li><a href="../index.php">HOME</a></li>
                    </div>
                </div>

            </div>
            <div class="body">
                <div id="root"></div>
            </div>
        </div>
    </div>

    <script>
        const product = [{
                id: 1,
                image: 'image/hh-2.png',
                title: 'C++ Course',
                price: 60,
            },

            {
                id: 2,
                image: 'image/aa-1.png',
                title: 'HTML Course',
                price: 250,
            },

            {
                id: 3,
                image: 'image/cc-1.png',
                title: 'python Course',
                price: 100,


            },

            {
                id: 4,
                image: 'image/csharp.png',
                title: 'C# Course',
                price: 99,


            },
            {
                id: 5,
                image: 'image/js.png',
                title: 'JavaScript Course',
                price: 130,


            },
            {
                id: 6,
                image: 'image/php.png',
                title: 'PHP Course',
                price: 199,


            },
        ];

        const categories = [...new Set(product.map((item) => {
            return item
        }))]

        document.getElementById('searchBar').addEventListener('keyup', (e) => {
            const searchData = e.target.value.toLowerCase();
            const filteredData = categories.filter((item) => {
                return (
                    item.title.toLowerCase().includes(searchData)
                )
            })
            displayItem(filteredData)
        });

        const displayItem = (items) => {
            document.getElementById('root').innerHTML = items.map((item) => {
                var {
                    image,
                    title,
                    price
                } = item;
                return (
                    `<div class='box'>
                        <div class='img-box'>
                            <img class='images' src=${image}></img>
                        </div> 
                        <div class='bottom'>
                            <p>${title}</p>
                            <h2>$ ${price}.00</h2>
                        <button>Learn More</button>
                        </div>
                    </div>`
                )
            }).join('')
        };
        displayItem(categories);
    </script>
</body>



</html>