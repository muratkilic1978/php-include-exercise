<?php 
    // In between opening PHP tag and closing PHP do following
    
    // Create a PHP variable named title and assign it the value "Marioclub". Remember to terminate each PHP statement with a semicolon
  

    // Create a PHP variable named page and assign it the value "contact". Remember to terminate each PHP statement with a semicolon
   

    // Now use the "include" function in PHP where you include header.php. Remember that terminate each PHP statement with a semicolon

?>
    <main>
        <article>
            <h2>Get in touch with me, Mario</h2>
            <form>
                <input type="text" name="fname" placeholder="Type Firstname" required>
                <input type="text" name="lname" placeholder="Type Lastname" required><br />
                <input type="email" name="mail" placeholder="Type Email" required>
                <input list="countries" name="country" id="country">
                  <datalist id="countries">
                    <option value="Albania">
                    <option value="Austria">
                    <option value="Belarus">
                    <option value="Belgium">
                    <option value="Bosnia">
                    <option value="Bulgaria">
                    <option value="Croatia">
                    <option value="Czech Republic">
                    <option value="Denmark">
                    <option value="Finland">
                    <option value="France">
                    <option value="Georgia">
                    <option value="Germany">
                    <option value="Greece">
                    <option value="Hungary">
                    <option value="Ireland">
                    <option value="Italy">
                    <option value="Kazakhstan">
                    <option value="Lithuania">
                    <option value="Netherlands">
                    <option value="Norway">
                    <option value="Poland">
                    <option value="Portugal">
                    <option value="Romania">
                    <option value="Russia">
                    <option value="Serbia">
                    <option value="Slovakia">
                    <option value="Spain">
                    <option value="Turkey">
                    <option value="Sweden">
                    <option value="Switzerland">
                    <option value="Ukraine">
                    <option value="United Kingdom">
                  </datalist>
               <br />
                <textarea name="question" rows="4" cols="40" placeholder="Ask a question...">Ask a question</textarea>
                <input type="submit" value="Get in Touch">
            </form>
        </article>
    </main>
<?php 
    // In between opening PHP tag and closing PHP do following

    // Now use the "include" function in PHP and include "footer.php". Remember to terminate each PHP statement with a semicolon
?>
