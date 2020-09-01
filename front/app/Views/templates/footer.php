        </div>
         <!-- End of Content Wrapper -->
        </div>
        <!-- End of Page Wrapper -->
        
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" ></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

        <!--JS Default -->
        <script src="<?= base_url("assets/js/commun/main.js") ?>"></script>
        <script src="<?= base_url("assets/js/dashboard/sb-admin-2.js") ?>"></script>

        <!--JS da view -->
        <?php if(isset($js)): ?>
        <?php foreach ($js as $key => $js) : ?>
            <script src="<?= base_url($js) ?>"></script>
        <?php endforeach ?> 
        <?php endif ?>

    </body>
</html>