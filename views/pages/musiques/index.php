<div class="container">
    <div class="musiques">
        <div class="item-musique">
            
            <div class="row">

                <div class="col-md-6">
        <br /><img src='/views/skin/images/hh.jpg' width='100%'/>
    </div>

            <?php foreach ($list as $k => $m):?> 

    

                    <div class="col-md-6" style='text-align: center'>
                         <br /><img src="<?= WEBROOT."views/uplaods/musiques/".$m['image'] ?>" width="75%">
                        <div >
                             <br /><h1 class="titre-gros-bis" style="margin-top: 0;"><?= $m['titre'] ?></h1>

                            <div class="contenu" style='text-align:center; max-width: 70%; margin:auto'><?= substr_replace(htmlspecialchars_decode($m['contenu']) , "...", 180, strlen($m['contenu']));?></div> 
                        
                            <!-- <div class="pistes"><?= htmlspecialchars_decode($m['piste']);?></div> -->
                            <a href="<?= WEBROOT."musiques/view/".$m['slug'] ?>" class="btn btn-inverse btn-sm">Lire plus <i class="icon-fastright"></i></a>   
                            <a href="<?= WEBROOT."musiques/view/".$m['slug'] ?>" class="btn btn-inverse btn-sm">Ecouter <i class="icon-circleplay"></i></a>   
                            <a href="<?= WEBROOT."musiques/view/".$m['slug'] ?>" class="btn btn-inverse btn-sm">Acheter <i class="icon-addtocart"></i></a>   
                        </div>
                        <br /><br />
                    </div>
                    
               
                <!-- <div class="clearfix"></div> -->
                <!-- <br /> -->
            <?php endforeach ?>
             </div>
        </div>
    </div>
</div>