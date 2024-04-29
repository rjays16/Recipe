<style>
.left-side {
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-right: 100px;
}

.left-side img {
    margin-top: 5px; 
}

.container {
    width: 100%;
}

.center {
    margin-left: -5%;
}

.author, .rating, .topics, .menu, .food, .photo_bar, .text_content, .text_content_random {
    margin-left: -5%;
}

.author img, .author span {
    vertical-align: middle;
}

.author span {
    font-size: 14px;
    margin-right: 5px; 
}

.author button {
    font-size: 14px; 
    padding: 5px 10px;
}

.rating u {
    font-size: 16px;
    text-decoration: underline;
    text-decoration-color: #E5B64C;
    line-height: 3px;
}

.rating span {
    color: black; 
    margin-left: 5%;
}

.topics_button {
    color: blue; 
    background-color: white; 
    border: 2px solid #ECECEC; 
    border-radius: 12px;
}
.menu {
    background-color: #FDFBF0;
}
.menu button {
    margin-right: 3%;
}
.menu_button_left{
    background-color: #FDFBF0; 
    border: none
}
.menu_button_right{
    background-color: #FDFBF0; 
    border: none;
    float:right;
}
.food_image {
    width: 900px;
}
.save_button {
    background-color: #BD081C; 
    border: none; 
    border-radius: 5px;
    position: absolute;
    top: 220px;
    margin-left: 2%;
    z-index: 2; 
}
.photo_bar {
    display: flex;
    gap: 5%;
}
.photo_bar img {
    width: 112.5px;
}
.text_content_random {
    display: flex;
    gap: 5%;
    background-color: #F2F9FF;
}

.facts img {
    height: 40px;
}

.facts {
    margin-top: 50px;
    display: flex;
}

.facts h3 {
    font-family: 'Roboto', sans-serif;
    font-weight: 700;
    font-style: italic;
    font-size: 24px;
    line-height: 30px;
    color: #064781;
}

.facts p{
    font-weight: 200;
    font-style: italic;
    font-size: 16px;
    line-height: 28px;
}
</style>


<div class="container-fluid">
    <div class="row">
        <div class="col-md-2">
            <div class="left-side d-flex flex-column align-items-center">
                <p class="mb-0">SHARE:</p>
                <img src="Images/social_media/facebook.png" alt="Facebook"/>
                <img src="Images/social_media/twitter.png" alt="Twitter"/>
                <img src="Images/social_media/whatsapp.png" alt="WhatsApp"/>
                <img src="Images/social_media/pinterest.png" alt="Pinterest"/>
                <img src="Images/social_media/link.png" alt="Link"/>
            </div>
        </div>
        <div class="col-md-7">
            <div class="center">
                <h2>Gnocchi with Roasted Red Pepper Sauce Recipe</h2>
            </div>
            <div class="author">
                <img src="Images/content/Kelly.png"><span style="color: black"> Kelly Tillotsdfdfon</span>
                <span style="color: #808080;"> Modified & Updated: Feb 26, 2024 | Reviewed by</span>
                <img src="Images/content/Kenny.png"><span style="color: black"> Kenny lannottiu </span>
                <button class="btn btn-primary">Jump To Recipe</button>
                <button class="btn btn-danger"><img src="Images/content/pin.png" alt="Pinterest"> Pinterest</button>
            </div>
            <div style="height: 10px;"></div>
            <div class="rating">
                <img src="Images/content/rating.png"><span style="color: black"> <u> 4.7 (24) </u> </span>
                <span> <u> 38 Reviews </u></span>
                <span> <u> 26 Photos </u></span>
            </div>
            <div style="height: 10px;"></div>
            <div class="topics">
                <span style="color: black">Topics: </span>
                    <button class="topics_button">Cake Recipes</button>
                    <button class="topics_button">Tiramisu Recipes</button>
                    <button class="topics_button">Berry Cakes</button>
                    <button style="color: #ECECEC; background-color: #074880; border: 2px solid #ECECEC; border-radius: 12px;">Lemon Cake</button>
                    <button class="topics_button">Apple Cake</button>
                    <button class="topics_button">Majui Cake</button>
                    <button class="topics_button">Quick Cake Recipes</button>
            </div>
            <div style="height: 10px;"></div>
            <div class="menu">
                    <button class="menu_button_left">  <img src="Images/content/save.png"> Save</button>
                    <button class="menu_button_left">  <img src="Images/content/rate.png"> Rate</button>
                    <button class="menu_button_left">  <img src="Images/content/print.png"> Print</button>
                    <button class="menu_button_left">  <img src="Images/content/share.png"> Share</button>
                    <button class="menu_button_right"> <img src="Images/content/editorial.png"> Editorial Guideline</button>
                    <button class="menu_button_right"> <img src="Images/content/expert.png"> Expert Verified</button>
            </div>
            <div class="food">
                <button class="save_button"> <img src="Images/content/pinterest.png"> Save</button>
                <img class="food_image" src="Images/content/food.png">
            </div>
            <div class="photo_bar">
                <img src="Images/content/add_photo.png"> 
                <img src="Images/content/1st.png">
                <img src="Images/content/2nd.png">
                <img src="Images/content/3rd.png">
                <img src="Images/content/4th.png">
                <img src="Images/content/last.png">
            </div>
            <div style="height: 20px;"></div>
            <div class="text_content">
                AToday, I want to share with you a delightful gnocchi recipe that's bursting with flavor: Gnocchi with Roasted Red Pepper 
                Sauce. This dish combines pillowy gnocchi with a rich and savory roasted red pepper sauce, creating a comforting and 
                satisfying meal that's perfect for any occasion. The roasted red peppers add a sweet and smoky flavor to the sauce, while the diced 
                tomatoes provide a bright and tangy contrast. With aromatic garlic, onions, and a blend of herbs, every bite is packed with 
                deliciousness. Plus, a generous sprinkle of Parmesan cheese adds a creamy and nutty finish, elevating the dish to new heights. 
                Whether you're cooking for a cozy dinner at home or entertaining guests, this Gnocchi with Roasted Red Pepper Sauce is sure to 
                impress!
            </div>
            <div style="height: 20px;"></div>
            <div class="text_content_random">
                <div class="facts">
                    <img src="Images/content/facts.png" class="float-left mr-3">
                     <div>
                        <h3>Random Fact about Gnocchi with Roasted Red Pepper Sauce Recipe:</h3>
                        <br>
                        <p>Did you know that <b>gnocchi</b> originated in Italy and is traditionally made with potatoes, <b>flour</b>, 
                        and <b>egg?</b> However, variations like ricotta or semolina gnocchi exist. The addition of <b>roasted red pepper 
                        sauce to gnocchi</b> provides a unique twist, offering a balance of sweetness and smokiness. This dish showcases 
                        the culinary creativity thatcomes from blending different flavors and textures
                    </p>
                    </div>
                </div>
            </div>
            </div>
        <div class="col-md-3">
            <div class="right-side">
                <img src="Images/content/ads.png">
            </div>
        </div>
    </div>
</div>
