<?php include 'header_meta_inc_view.php';?>

<?php include 'header_inc_view.php';?>

    <div class="container">
      <!-- Example row of columns -->

      <div class="row">
        <div class="col-lg-12">
          <h2>CSV Converter</h2>

            <form action="<?php echo site_url(); ?>datagov/csv_to_json" method="post" role="form" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="datajson">Upload a CSV File</label>
                    <input type="file" name="csv_upload">
                </div>


                <div class="form-group">
                    <input type="submit" value="Convert" class="btn btn-primary">
                </div>

            </form>


        </div>
    </div>

<?php include 'footer.php'; ?>