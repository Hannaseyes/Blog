    <section id="bottom_area">
    
        <?php 
        
            novalite_bottom_content();
            do_action( 'novalite_socials' ); 
            
        ?>
        
        <footer id="footer">
        
            <div class="container">
            
                <div class="row" >
                     
                    <div class="span12 copyright" >
                    
                        <p>
						©2017&nbsp;&nbsp;&nbsp;&nbsp;Hannaseyes&nbsp;&nbsp;&nbsp;&nbsp;感谢支持&nbsp;&nbsp;&nbsp;&nbsp;|
                        <a href="http://www.miitbeian.gov.cn/" rel="external nofollow" target="_blank">
							<?php echo get_option( 'zh_cn_l10n_icp_num' );?>
						</a>
                        </p>
                    
                    </div>
                        
                </div>
        
            </div>
        
        </footer>
    
    </section>

</div>

<div id="back-to-top">
<a href="#" style=""><i class="icon-chevron-up"></i></a> 
</div>

<?php wp_footer() ?>  
 
</body>

</html>