<?php
/**
 * Template part for displaying page content in page-submit.php.
 *
 * @package QOD_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    

<form name="quoteForm" id="quote-submission-form"><!--. submission-form -->
        <div>
            <label for="quote-author">Author of Quote</label>
            <input type="text" name="quote_author" id="quote-author" required aria-required="true">
        </div>
        <div>
            <label for="quote-content">Quote</label>
            <textarea rows="3" cols="20" name="quote_content" id="quote-content" required aria-required=true></textarea>
        </div>
        <div>
            <label for="quote-source">Where did you find this quote? (e.g. book name)</label>
            <input type="text" name="quote_source" id="quote-source">
        </div>
        <div>
            <label for="quote-source-url">Provide the URL of teh quote source, if available.</label>
            <input type="url" name="quote_source_url" id="quote-source-url">
        </div>

        <input type="submit" value="Submit Quote">
    </form>

    <div class='submit-success-message'>
    	
    </div>