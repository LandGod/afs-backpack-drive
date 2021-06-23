<?php /* Template Name: BackpackDrive */ ?>
<?php get_header(); ?>

<script>
    // Add assets url path to global scope for our JS to use for loading files
    window.backpackDriveAssetsURL = "<?php print content_url('uploads/backpack-drive-assets/'); ?>";
    window.siteURL = "<?php print get_site_url() ?>"
</script>

<style>
    /* We can't do this in the main css file since it uses PHP to get the file path */
    .tt-tag-main {
        background: url(<?php print content_url('uploads/backpack-drive-assets/images/tagimage.png'); ?>);
        background-repeat: no-repeat;
        background-size: 600px 300px;
        background-position: center;
    }
</style>

<div class="container mt-2" style="position: relative;">
    <!-- Header row with hero image -->
    <div class="row">
        <div class="col-12 col-lg-6 order-lg-1 order-2 text-center">
            <picture>
                <img class="img-fluid rounded mx-auto" style="object-fit:cover;max-height:274px;" sizes="(max-width: 1400px) 100vw, 1400px" srcset="
                    <?php print content_url('uploads/backpack-drive-assets/images/backpack-hero/'); ?>backpack-hero_uncwzr_c_scale,w_200.jpg 200w,
                    <?php print content_url('uploads/backpack-drive-assets/images/backpack-hero/'); ?>backpack-hero_uncwzr_c_scale,w_464.jpg 464w,
                    <?php print content_url('uploads/backpack-drive-assets/images/backpack-hero/'); ?>backpack-hero_uncwzr_c_scale,w_664.jpg 664w,
                    <?php print content_url('uploads/backpack-drive-assets/images/backpack-hero/'); ?>backpack-hero_uncwzr_c_scale,w_879.jpg 879w,
                    <?php print content_url('uploads/backpack-drive-assets/images/backpack-hero/'); ?>backpack-hero_uncwzr_c_scale,w_1037.jpg 1037w,
                    <?php print content_url('uploads/backpack-drive-assets/images/backpack-hero/'); ?>backpack-hero_uncwzr_c_scale,w_1185.jpg 1185w,
                    <?php print content_url('uploads/backpack-drive-assets/images/backpack-hero/'); ?>backpack-hero_uncwzr_c_scale,w_1347.jpg 1347w,
                    <?php print content_url('uploads/backpack-drive-assets/images/backpack-hero/'); ?>backpack-hero_uncwzr_c_scale,w_1400.jpg 1400w" 
                    src="<?php print content_url('uploads/backpack-drive-assets/images/tagtree-hero/'); ?>tagtree-hero_uncwzr_c_scale,w_1400.jpg" alt="Excited gift recipient">
            </picture>
        </div>
        <div class="col-12 col-lg-6 order-lg-2 order-1">
            <div class="jumbotron">
                <h1 class="display-4 text-uppercase">YOUTH IN CARE BACKPACK DRIVE</h1>
                <p class="lead">A virtual back-to-school drive to ensure that Alternative Family Services youth in foster care are fully equipped with the tools and resources necessary for an equitable education.</p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            Individuals, community organizations, and corporations can support a youth in care education by donating funds, backpacks, and school supplies.
        </div>
    </div>

    <!-- Tag select row -->
    <div class="row mb-5">
        <div class="col-12">
            <div class="card">
                <h5 class="card-header text-center">Choose an age group to donate</h5>
                <div class="card-body row" id="button-row">
                    <div class="col-4 text-center" id="age-group-container-1">
                        <button id="age-group-button-1" class="mx-auto">
                            <img class="img-fluid img-thumbnail" style="object-fit:cover;max-height:100px;" src="<?php print content_url('uploads/backpack-drive-assets/images/present-stars.jpg'); ?>" alt="Present for 0-6">
                            <div class="tt-button-label">Age 0-6</div>
                        </button class="button">
                    </div>
                    <div class="col-4 text-center" id="age-group-container-2">
                        <button id="age-group-button-2" class="mx-auto">
                            <img class="img-fluid img-thumbnail" style="object-fit:cover;max-height:100px;" src="<?php print content_url('uploads/backpack-drive-assets/images/present-dots.jpg'); ?>" alt="Present for 7-12">
                            <div class="tt-button-label">Age 7-12</div>
                        </button class="button">
                    </div>
                    <div class="col-4 text-center" id="age-group-container-3">
                        <button id="age-group-button-3" class="mx-auto">
                            <img class="img-fluid img-thumbnail" style="object-fit:cover;max-height:100px;" src="<?php print content_url('uploads/backpack-drive-assets/images/present-plain.jpg'); ?>" alt="Present for 13-18">
                            <div class="tt-button-label">Age 13-18</div>
                        </button class="button">
                    </div>
                </div>
                <div class="carbody row">
                    <div class="col-12">
                        <hr class="mx-4">
                    </div>
                </div>
                <div class="card-body row">
                    <div class="col-12">
                        <h2>Advance Youth Education: A Virtual Back-to-School Drive for Youth in Care</h2>
                        <ul>
                            <li>There is no limit to how many tags you can fulfill.</li>
                            <li>Share the link to the Youth Education Drive with your network and on social media.</li>
                            <li>Individuals, community organizations (churches, community groups) and businesses can participate in Foster Joy. Just share this webpage
                                with your network!</li>
                            <li>Questions can be emailed to Director of Development, Simone West - <a href="mailto:swest@afs4kids.org" target="_blank">swest@afs4kids.org</a>.</li>
                        </ul>
                        <h3>Adopting a Tag</h3>
                        <ol>
                            <li>Click to choose youth age group.</li>
                            <li>Click "new tag" to browse requests. Hitting the back-arrow starts the tag search over.</li>
                            <li>Once you choose a foster youth's gift tag, select <em>Donate Money for Supplies</em> or <em>Buy & Ship Supplies</em>.</li>
                        </ol>
                        <div class="tt-oj-sub-item">
                            <h4>Buy and Ship Gift</h4>
                            <ul>
                                <li>YPurchase any items from the <a href="https://www.amazon.com/hz/wishlist/ls/1MLYBQK7GDURZ/ref=nav_wishlist_lists_1?_encoding=UTF8&type=wishlist&pldnSite=1" target="_blank">Youth in Care Wishlist</a> (or any online retailer) and ship to:
                                    <p class="blockquote lead font-weight-bold my-2">AFS Development Department, 401 Roland Way #150, Oakland, CA 94621</p>
                                </li>
                                <li>AFS caseworkers will deliver gifts to foster youth.</li>
                            </ul>
                        </div>
                        <div class="tt-oj-sub-item">
                            <h4>Donate Directly to the AFS Foster Learning Fund</h4>
                            <ul>
                                <li>
                                    Funds will be used for the highest educational priorities for foster youth.
                                    Examples of how your donation may be used to foster learning with AFS clients:
                                    <pre>
                                        $5,000 - Tuition support for two Transition Age Youth (TAY)
                                        $1,000 - Tutoring expenses for one Youth 
                                        $500 - Laptop/Chromebook for school 
                                        $250 - School clothes/shoes for two Youth 
                                        $100 - New backpacks for three Youth 
                                        $75 - Haircare kit for Black Youth 
                                        $50 - School supplies for one Youth 
                                    </pre>
                                </li>
                            </ul>
                            <a class="btn btn-danger btn-afsOrange" style="margin-left:2.75em;" href="https://alternativefamilyservices.humanitru.com/donate?page=foster-learning&amount=50&options=100%2C75%2C25%2C10&tribute=true&ach=true&address=optional" target="_blank" rel="noopener noreferrer">Donate</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- OR -->
    <div class="row">
        <div class="col-12 text-center">
            <h1 class="text-center tt-or">OR</h1>
        </div>
    </div>

    <!-- Donate row -->
    <div class="row mb-5">
        <div class="col-12">
            <div class="card">
                <div class="h4 card-header text-center"><strong>Give to the AFS Holiday Fund – Foster Joy!</strong></div>
                <div class="card-body row text-center">
                    <div class="col-12 text-center">
                        <a class="btn btn-lg btn-danger btn-afsOrange" href="https://alternativefamilyservices.humanitru.com/donate?page=foster-learning&amount=50&options=100%2C75%2C25%2C10&tribute=true&ach=true&address=optional" rel="noopener noreferrer">Donate</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Sponsors -->
    <div id="sponsors-row" class="row mb-4">
        <div class="col-12">
            <div class="card">
                <h4 class="card-header text-center">Thank you to our corporate and organizational partners!</h4>
                <div class="card-body row justify-content-center">
                    <?php
                    // We're going to generate the sponsor box dynamically with php and then just insert them all 
                    // We'll use a JSON file to hold the info (see "/wp-content/uploads/backpack-drive-assets/sponsor-info.json")
                    // with a specific folder holding the logos (see "/wp-content/uploads/backpack-drive-assets/sponsor-logos")
                    // We're doing this with PHP so that the import happens once and then is cached, as this will be a lot more efficient,
                    // however, this means that whenever you update sponsor-info.json, you'll need to udpate the page on the back end so that 
                    // wordpress re-runs the php (and then Kinsta cache should clear automatically when this page is updated).

                    $rawSponsors = file_get_contents(content_url('uploads/backpack-drive-assets/sponsor-info.json'));
                    $sponsors = json_decode($rawSponsors, true);

                    for ($i = 0; $i < count($sponsors); $i++) {

                        $sponsorImageLink = content_url('uploads/backpack-drive-assets/sponsor-logos/' . $sponsors[$i]['logo']);
                        $sponsorName = $sponsors[$i]['name'];
                        $sponsorLink = $sponsors[$i]['link'];


                        print "<div class='col-12 col-md-4 tt-sponsor-col mb-3'>";
                        print   "<a href='$sponsorLink' rel='noopener noreferrer' target='__blank'>";
                        print       "<div class='tt-sponsor-box'>";
                        print           "<img src='$sponsorImageLink' alt='$sponsorName' class='tt-sponsor-image' style='object-fit:contain'>";
                        print       "</div>";
                        print   "</a>";
                        print "</div>";
                    };
                    ?>
                </div>
            </div>
        </div>

    </div>

    <?php get_footer(); ?>



    <?php
    /*
// List of toys
// Each toy name should exactly correspond with an existing image
$toyList = array("truck", "rocking_horse", "doll");
$toy = $toyList[rand(0, count($toyList) - 1)];
$toyPicturesFolder = ;
$toySrc = $toyPicturesFolder . $toy . ".jpg";

// List of names with genders
$nameGenderPairs = file_get_contents(content_url('uploads/backpack-drive-assets/humanChildren.json'));
$realHumanChildren = json_decode($nameGenderPairs);
$randomNumber = rand(0, count($realHumanChildren) - 1);
$name = $realHumanChildren[$randomNumber][0];
$gender = strcmp($realHumanChildren[$randomNumber][1], 'm') == 0 ? 'Boy' : "Girl";
$pronoun = strcmp($gender, 'Boy') == 0 ? 'him' : 'her';
$printableToy = str_replace("_", " ", $toy);
*/
    ?>