<div class="row">
    <div class="col-md-12">
        <textarea class="summernote_view" name="isi"><?= $berita->NewsBody ?></textarea>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('.summernote_view').summernote({
            height: 300,
            toolbar: false,
        });
        $('.summernote_view').summernote('disable');
    });
</script>