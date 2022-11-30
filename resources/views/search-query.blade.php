{{-- Query --}}
<!-- JQuery and Plugin JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/mark.js/7.0.0/jquery.mark.min.js"></script>
<script>
$(function() {
    $(".search").on("input.highlight", function() {
        // Determine specified search term
        var searchTerm = $(this).val();
        // Highlight search term inside a specific context
        $("#context").unmark().mark(searchTerm);
    }).trigger("input.highlight").focus();
});
</script>
<style>
    mark{
        background: #f6aa30;
        color: black;
    }
</style>