




<section class="py-5 anti">
    <div class="feature-work container my-4">
        <div class="row d-flex d-flex align-items-center">
            <div class="col-lg">
                <h1 class="feature-work-heading h2 py-3 semi-bold-600">Les articles de veille informatique</h1>
                <hr>
                <p class="feature-work-body text-muted light-300">
                <?php
                $lesArticles = getArticles();
                foreach ($lesArticles as $a) {
                    ?><h4> <?php $lien = $a['lien_article']; ?>
                    <a href="<?php echo $lien ?>" target="_blank">
                        <img src="logos/lien.svg" class="img-fluid" style="width: 25px;"></a><?php echo ' '.$a['nom_article']?>
                    </h4>
                    <p style="color:grey"><i><?php echo $a['date_article'] ?></i></p>
                    <a><?php echo $a['resume_article']?></a>
                    
                    </br>

                    
                    <hr><?php
                } ?>
                </p>
            </div>
        </div>
    </div>
</section>