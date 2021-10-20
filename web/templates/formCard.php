<!-- Temporary Spam checker -->
<!-- TODO make a proper script, not here-->
<script>
    console.log('hi ho bobby...');
//     const longURL = document.getElementById("long");

// longURL.addEventListener("input", function (event) {
//   if (longURL.validity.typeMismatch) {
//     longURL.setCustomValidity("I am expecting an e-mail address!");
//   } else {
//     longURL.setCustomValidity("");
//   }
// });


</script>


<div class="card border-primary mb-4" style="max-width: 55rem;">
    <div class="card-body">
        <p class="card-text">
        <form class="form-inline" method="post" action="linksPage.php">
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