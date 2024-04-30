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

.author, .rating, .topics, .menu, .food, .photo_bar, .text_content, .text_content_random, .trust, .cost, .dishes, .thoughts, .store, 
.reheat, .gnocchi, .reviews, .positive_review{
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
    margin-top: 40px;
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
    font-weight: 400;
    font-style: italic;
    font-size: 16px;
    line-height: 28px;
}

.trust img{
    width: 900px;
}

.trust h3 {
    font-family: 'Roboto', sans-serif; 
    font-weight: 700; 
    font-size: 24px; 
    line-height: 30px; 
    color: #064781; 
}

.trust p{
    font-weight: 400;
    font-size: 14.5px;
    line-height: 28px;
}

.cost {
    display: flex;
    gap: 5%;
    background-color: #C7F6C7;
    border-right: 8px solid #5BD1B5; 
    border-bottom: 8px solid #5BD1B5;
}

.cost_content img {
    height: 40px;
}

.cost_content {
    margin-top: 40px;
    display: flex;
}

.cost_content h3 {
    font-family: 'Roboto', sans-serif;
    font-weight: 700;
    font-size: 24px;
    line-height: 30px;
}

.cost_content p {
    font-weight: 400;
    font-size: 16px;
    line-height: 28px;
}
.overall img {
    height: 20px;
}
.overall {
    float: left; 
}
.dollar_sign img{
    height: 20px;
}

.dollar_sign {
    float: right;
    margin-right: 120px;
}
.dish_content h3 {
    font-family: 'Roboto', sans-serif;
    font-weight: 700;
    font-size: 24px;
    line-height: 30px;
}
.dish_container {
    display: flex;
    align-items: center;
    justify-content: space-between;
}
.dish_horizon{
    border: 4px solid #F2F0DF; 
}
.dish_image img {
    float: left;
    margin-right: 10px;
}

.dish_content {
    flex-grow: 1;
}
.dish_content u {
    text-decoration: underline;
    text-decoration-color: #E5B64C;
    line-height: 3px;
}
.thoughts{
    border: 2px solid #C3EBFF;
}
.thoughts_container {
    margin-top: 40px;
    display: flex;
}
.thoughts_container h3 {
    font-family: 'Roboto', sans-serif;
    font-weight: 700;
    line-height: 30px;
    color: #064781;
}
.thoughts_container p{
    font-weight: 400;
    font-size: 16px;
    line-height: 28px;
}
.store_content img {
    height: 40px;
}
.store_content {
    margin-top: 40px;
}
.store_content h3 {
    font-family: 'Roboto', sans-serif;
    font-weight: 700;
    font-size: 24px;
    line-height: 30px;
    color: #064781;
}
.store_content p {
    font-weight: 400;
    font-size: 14px;
    line-height: 28px;
}
.reheat_content img {
    height: 40px;
}
.reheat_content {
    margin-top: 40px;
}
.reheat_content h3 {
    font-family: 'Roboto', sans-serif;
    font-weight: 700;
    font-size: 24px;
    line-height: 30px;
    color: #064781;
}
.reheat_content p {
    font-weight: 400;
    font-size: 14px;
}

.reheat_content ul {
    font-weight: 400;
    font-size: 14px;
}
.reheat_content_methods img{
    height: 25px;
}
.gnocchi img {
    height: 40px;
}
.gnocchi {
    margin-top: 40px;
}
.gnocchi h3 {
    font-family: 'Roboto', sans-serif;
    font-weight: 700;
    font-size: 24px;
    color: #064781;
}
.gnocchi p {
    font-weight: 400;
    font-size: 16px;
}
.gnocchi_content p {
    font-weight: 400;
    font-size: 16px;
}
.gnocchi_content li {
    font-weight: 400;
    font-size: 16px;
}


.reviews h3 {
    font-family: 'Roboto', sans-serif;
    font-weight: 700;
    font-size: 24px;
    line-height: 30px;
    color: #064781;
}

.reviews h4 {
    font-family: 'Roboto', sans-serif;
    font-weight: 700;
    font-size: 24px;
    line-height: 30px;
    color: #064781;
}

.reviews_content {
    flex-grow: 1;
}
.reviews_content p {
    font-weight: 400;
    font-size: 20px;
}
.reviews_button {
    font-size: 14px; /* Increase font size for better visibility */
    color: blue; 
    background-color: white; 
    border: 2px solid #ECECEC; 
    border-radius: 20px;
    margin-right: 4%;
}
.custom-textarea {
    border: 1px solid #ccc; 
    border-radius: 5px; 
    padding: 10px; 
    resize: vertical; 
}

.custom-textarea::placeholder {
    color: #999; 
}
.photo-info {
    display: flex;
    align-items: start;
    z-index: 1;
}
.positive_review p {
    font-weight: 400;
    font-size: 16px;
}
.positive_review u {
    text-decoration: underline;
    text-decoration-color: #E5B64C;
    line-height: 3px;
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
            <div style="height: 20px;"></div>
            <div class="trust">
                <img src="Images/content/trust.png">
                <center style="margin-top: 20px;"><h3>Why trust this Gnocchi with Roasted Red Pepper Sauce Recipe</h3></center>
                <br>
                <p>This <b>Gnocchi with Roasted Red Pepper Sauce Recipe</b> embodies authenticity and reliability. Crafted by real users and 
                meticulously vetted by our experienced editors, it ensures quality and taste. Each ingredient, from handpicked red bell 
                peppers to fragrant basil leaves, is selected with care, promising a flavorful experience. Trust in the expertise of 
                our community and the dedication of our team, delivering recipes you can confidently recreate in your kitchen. With a 
                track record of satisfied cooks, this recipe guarantees success and satisfaction every time.
                </p>
            </div> 
            <div style="height: 20px;"></div>
            <div class="cost">
                <div class="cost_content">
                    <img src="Images/content/money.png" class="float-left mr-3">
                     <div>
                        <h3>Is Gnocchi with Roasted Red Pepper Sauce Recipe Economical for Home Cooking:</h3>
                        <br>
                        <p>This <b>Gnocchi with Roasted Red Pepper Sauce</b> Recipe offers excellent value for households. With simple 
                            ingredients like gnocchi, <b>red bell peppers</b>, and <b>canned tomatoes</b>, it's budget-friendly. The versatility 
                            allows for substitutions based on what's on hand, reducing waste.
                        </p>
                        <div class="overall">
                            <img src="Images/content/overall.png">
                            <small>Overall Verdict: 9/10. </small>
                        </div>
                        <div class="dollar_sign" class="float-right">
                            <img src="Images/content/dollar_sign.png">
                            <small>Approx. cost for a household of 4: <b>$12-15.</b></small>
                            <div style="height: 40px;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="height: 20px;"></div>
            <div class="dishes">
                <div class="dish_content">
                    <img src="Images/content/dish.png" class="float-left mr-3">
                </div>
                <div>
                    <h3>Enhance Your Gnocchi Experience with These Unique Side Dishes:</h3>
                </div>
                <br>
                <hr class="dish_horizon">
                <div class="dish_container">
                    <div class="dish_image">
                        <img src="Images/content/dish1.png">
                    </div>
                    <div class="dish_content">
                        <p><b><u>Pesto-Stuffed Mushrooms:</u></b> Hollow out cremini mushrooms and fill them with a flavorful mixture of 
                            pesto, breadcrumbs, and Parmesan cheese. Bake until golden brown for a savory and indulgent appetizer 
                            that pairs perfectly with the creamy gnocchi.</p>
                    </div>
                </div>
                <div class="dish_container">
                    <div class="dish_image">
                        <img src="Images/content/dish2.png">
                    </div>
                    <div class="dish_content">
                        <p> <b><u>Citrusy Kale Salad:</u></b>. Massage kale leaves with a zesty dressing made from lemon juice, olive oil, and a touch 
                        of honey. Toss in segments of orange and grapefruit, along with crunchy toasted almonds and creamy goat cheese for a refreshing 
                        side that adds brightness to the meal.
                    </p>
                    </div>
                </div>
                <div class="dish_container">
                    <div class="dish_image">
                        <img src="Images/content/dish3.png">
                    </div>
                    <div class="Smoky Bacon-Wrapped Dates">
                        <p><b><u>Pesto-Stuffed Mushrooms:</u></b> Stuff dates with tangy blue cheese and wrap them in smoky bacon 
                        before baking until crispy and caramelized. The sweet, salty, and savory flavors make these irresistible bites 
                        the perfect accompaniment to the rich gnocchi dish.
                    </p>
                    </div>
                </div>
            </div>
            <div style="height: 20px;"></div>
            <div class="thoughts">
                <div class="thoughts_container">
                    <p class="float-left mr-5"></p>
                     <div>
                        <h3>Random Fact about Gnocchi with Roasted Red Pepper Sauce Recipe:</h3>
                        <br>
                        <p>This Gnocchi with Roasted Red Pepper Sauce Recipe is a culinary delight, combining pillowy gnocchi 
                            with the bold flavors of roasted red peppers. The sauce, infused with aromatic garlic and herbs, elevates 
                            the dish to a new level of sophistication. However, I would suggest enhancing the depth of flavor by adding 
                            a splash of balsamic vinegar or a sprinkle of red pepper flakes for a subtle kick. Overall, it's a 
                            satisfying and versatile dish that can be enjoyed as a comforting weeknight meal or dressed up for a special occasion.
                        </p>
                        <img src="Images/content/kelly.png"><small><b> Kelly Tillotson</b><small>
                        <div style="height: 20px;"></div>    
                    </div>
                </div>
            </div>
            <div style="height: 20px;"></div>
            <div class="store">
                <div class="store_content">
                    <img src="Images/content/store.png" class="float-left mr-3">
                     <div>
                        <h3>How to Store or Freeze Gnocchi with Roasted Red Pepper Sauce Recipe</h3>
                        <br>
                        <p><b>Storing Leftovers:</b> Allow the gnocchi with roasted red pepper sauce to cool completely before 
                        transferring it to an airtight container. Store in the refrigerator for up to 3-4 days.<br></p>
                        
                        <p><b>Freezing Instructions:</b> To freeze, portion the cooled gnocchi and sauce into freezer-safe containers 
                        or resealable plastic bags. Make sure to remove as much air as possible to prevent freezer burn. Label with the 
                        date and freeze for up to 2-3 months.<br></p>
                            
                        <p><b>Thawing and Reheating:</b> When ready to enjoy, thaw the frozen gnocchi overnight in the refrigerator. 
                        Reheat gently in a skillet over medium heat, stirring occasionally, until heated through. Alternatively, 
                        microwave in short intervals, stirring in between, until warmed to your liking. Serve hot with a sprinkle of 
                        Parmesan cheese and fresh basil leaves for garnish.</p>
                    </div>
                </div>
            </div>
            <div style="height: 20px;"></div>
            <div class="reheat">
            <hr>
                <div class="reheat_content">
                    <img src="Images/content/reheat.png" class="float-left mr-3">
                     <div>
                        <h3>How To Reheats Leftovers</h3>
                        <br>
                        <div class="reheat_content_methods">
                        <img src="Images/content/1.png" class="float-left mr-1"><p><b> Stovetop Method:</b></p>
                        <ul>
                            <li>Place a skillet over medium heat and add the leftover gnocchi with roasted red pepper sauce.</li>
                            <li>Add a splash of water or broth to loosen the sauce if needed.</li>
                            <li>Stir occasionally until the dish is heated through, about 5-7 minutes.</li>
                            <li>Taste and adjust seasoning with salt and pepper if necessary with the creamy gnocchi</li>
                        </ul>
                        <br>
                        <img src="Images/content/2.png" class="float-left mr-1"><p><b> Microwave Method:</b></p>
                        <ul>
                            <li>Transfer the desired portion of leftover gnocchi and sauce to a microwave-safe dish.</li>
                            <li>Cover loosely with a microwave-safe lid or damp paper towel to prevent splatters.</li>
                            <li>Microwave on high in 30-second intervals, stirring in between, until heated through.</li>
                            <li>Check the temperature and continue heating until piping hot.</li>

                        </ul>
                        <br>
                        <img src="Images/content/3.png" class="float-left mr-1"><p><b> Oven Method (for Larger Portions):</b></p>
                        <ul>
                            <li>Preheat the oven to 350°F (175°C).</li>
                            <li>Transfer the leftover gnocchi with roasted red pepper sauce to an oven-safe dish.</li>
                            <li>Cover tightly with foil to prevent drying out.</li>
                            <li>Bake in the preheated oven for 15-20 minutes, or until heated through.</li>
                            <li>Serve hot with a sprinkle of Parmesan cheese and fresh basil leaves for garnish.</li>
                        </ul>
                        <br>
                    </div>
                    </div>
                </div>
            </div>
            <div style="height: 20px;"></div>
            <div class="gnocchi">
                <div class="gnocchi_content">
                    <img src="Images/content/gnocchi.png" class="float-left mr-3">
                     <div>
                        <h3>Gnocchi with Roasted Red Pepper Sauce Recipe : Healthy or Unhealthy?</h3>
                        <br>
                            <p>This Gnocchi with Roasted Red Pepper Sauce Recipe offers a balanced mix of carbohydrates from the gnocchi, vegetables from the red 
                            bell peppers and tomatoes, and healthy fats from the olive oil. However, the dish may be considered somewhat unhealthy due to the 
                            high carbohydrate content from the gnocchi and the addition of Parmesan cheese.</p>
                        
                        <p><b>To make this recipe healthier, consider the following suggestions:</b><p>
                        <br>
                        <ol>
                            <li><p class="text-primary"><b>Increase Vegetable Content:</b></p>
                                <p>Add more vegetables such as spinach, kale, or mushrooms to increase the nutrient density and fiber content of the dish.</p>
                            </li>
                            <li><p class="text-primary"><b>Use Whole Wheat Gnocchi:</b></p>
                                Opt for whole wheat gnocchi instead of traditional gnocchi to increase the fiber content and provide 
                                    more sustained energy.
                            </li>
                            <li><p class="text-primary"><b>Reduce Cheese:</b></p>
                                <p>Limit the amount of Parmesan cheese or opt for a lighter cheese alternative to reduce saturated fat 
                                    and calorie intake.</p>
                            </li>
                            <li><p class="text-primary"><b>Use Fresh Herbs:</b></p>
                                Replace dried herbs with fresh herbs like basil and oregano to boost flavor without adding extra sodium.
                            </li>
                        </ol>
                        <p>By incorporating these changes, you can transform this recipe into a healthier option without compromising on taste and satisfaction.</p>
                    </div>
                </div>
            </div>
            <div style="height: 20px;"></div>
            <div class="reviews">
                <div class="reviews_content">
                    <h3>Reviews (273)</h3><br>
                    <img src="Images/content/neko.png" class="float-left mr-3">
                     <div>
                        <h4>Neko-cyann</h4>
                        <br>
                        <div style="margin-left:5.5%;">
                            <p>Your Rating <img src="Images/content/star_review_rating.png"><span class="text-muted"> |</span> 
                            <span class="text-primary"> Good</span></p>
                            <hr class="muted">
                            <span style="font-size:16px;">Your Review </span>
                            <button class="reviews_button"> Enjoyable with modifications </button>
                            <button class="reviews_button"> Requires flavor adjustments </button>
                            <button class="reviews_button"> Worth a second try </button>
                            <button class="reviews_button" style="margin-left:11%"> Almost a favorite </button>
                            <div style="height: 30px;"></div>
                            <textarea class="form-control custom-textarea" placeholder="What did you think about this recipe? Did you make any changes or notes?" rows="3"></textarea>
                            <div style="height: 30px;"></div>
                            <div class="photo-info d-flex align-items-start">
                                <div class="float-left">
                                    <label for="file-upload">
                                        <img src="Images/content/add_photo_optional.png" style="cursor: pointer;" id="upload-image">
                                    </label>
                                    <input type="file" id="file-upload" style="display: none;">
                                </div>
                                <div class="ml-3">
                                    <p>Images must be: 
                                        <ul>
                                            <li>PNG, GIF, JPEGs only</li>
                                            <li>Minimum dimensions 960x960</li>
                                            <li>Max file size: 30MB</li> 
                                        </ul>
                                    </p>
                                </div>
                            </div>
                            <div class="float-left">
                                <button type="button" class="btn btn-primary btn-lg btn-block" style="width:375px;">Submit</button>
                            </div>
                            <div class="float-right">
                            <button type="button" class="btn btn-lg btn-block text-dark" style="width:400px; background-color: #F3F3F3;">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div style="height: 50px;"></div>
            <div class="star_review">
                <div class="star_content">
                    <p>
                    <hr class="muted">
                    <img src="Images/content/star_review_rating.png" class="float-left mr-3">
                     <div>
                        <p> 4.7 out of 5 </p>
                        <p> <b>371 Ratings</b></p>
                        <br>
                        <img src="Images/content/5_stars.png"><br>
                        <img src="Images/content/4_stars.png"><br>
                        <img src="Images/content/3_stars.png"><br>
                        <img src="Images/content/2_stars.png"><br>
                        <img src="Images/content/1_star.png"><br>
                    </div>
                </div>
            </div>
            <div style="height: 20px;"></div>
            <div class="positive_review">
                <div class="positive_review_content">
                    <img src="Images/content/title.png" class="float-left mr-3">
                     <div>
                     <img src="Images/content/full_star.png">
                     <div style="width:400px;">
                        <br>
                        <p>This is a great, easy, go-to recipe!  This peach ice cream is a dream! 
                            The texture is creamy and the flavor is bursting with fresh peach goodness. 
                            It's the perfect treat for hot summer days. I couldn't stop scooping!
                            Definitely a new favorite in our household.<p>
                                <br>
                    </div>          
                    <div class="float-left">
                            <img src="Images/content/rachel.png"><span class="text-primary" style="font-size:16px"> Rachel Yakes</span>
                        </div>
                        <div class="float-right">
                            <img src="Images/content/thumbs_up.png"><span style="font-size:16px"> <u>Helpful</u></span>
                        </div>              
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
