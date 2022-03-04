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
    let passedHumanTest = "mca" === document.forms["urlEnterer"]["bassist"].value;
    if(isUnwelcome){
        console.log("NG: " + Date());
        return false;
    }
    if(!passedHumanTest){
        alert("Nice try.")
        return false;
    }
    console.log("luvvit" + Date());
    return true;
}


</script>


<div class="card border-primary mb-4" style="max-width: 38rem;">
    <div class="card-body">
        <p class="card-text">
        <form class="form-inline" name="urlEnterer" method="post" action="linksPage.php" onsubmit="return validateForm()" >
            <div class="form-group">
            <label >Who played bass in the Beastie Boys: </label>
                <input type="string" name="bassist" required 
             class="form-control" id="bassist" placeholder="name">
            </div>
            <div class="form-group">
            <label >Shorten my URL: </label>
                <input type="url" name="longurl" required 
           pattern="........[^m][^e][^g][^a].*"  class="form-control" id="long" placeholder="Long URL">
            </div>

            <button type="submit" class="btn btn-info">Shorten it!</button>
        </form>
        </p>
    </div>
</div>