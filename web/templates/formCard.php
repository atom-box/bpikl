<!-- Temporary Spam checker -->
<!-- TODO make a proper script, not here-->
<script>
    console.log('hi ho bobby...');
// todo todo
//     const longURL = document.getElementById("long");

// longURL.addEventListener("input", function (event) {
//   if (longURL.validity.typeMismatch) {
//     longURL.setCustomValidity("I am expecting an e-mail address!");
//   } else {
//     longURL.setCustomValidity("");
//   }
// });

const validateForm = function(){
    const unverifiedURL = document.forms["urlEnterer"]["longurl"].value;
    const reggie = /.*mega.*|.*porson.*|.*delight.*/;
    let isUnwelcome = reggie.test(unverifiedURL);
    if(isUnwelcome){
        console.log("NG: " + Date());
        return false;
    }
    console.log("luvvit" + Date());
    return true;
}


</script>


<div class="card border-primary mb-4" style="max-width: 55rem;">
    <div class="card-body">
        <p class="card-text">
        <form class="form-inline" name="urlEnterer" method="post" action="linksPage.php" onsubmit="return validateForm()" >
            <div class="form-group">
            <label >Try it now: </label>
                <input type="url" name="longurl" required 
           pattern="........[^m][^e][^g][^a].*"  class="form-control" id="long" placeholder="Long URL">
            </div>
            <button type="submit" class="btn btn-info">Shorten it!</button>
        </form>
        </p>
    </div>
</div>