<script>

    function scrollingDiv(scrollDiv,scrollItems){
        
        scrollDiv = $(scrollDiv);
        let count = $(scrollItems).length;
        scrollItems = scrollItems[0];
        let scrollCounter = 0;
        let scrolling = true;

        console.log('scrollItems--',scrollItems);
        
        intervalId = setInterval(() => {
            
            if(scrollCounter < count-1 && scrolling){
                scrollCounter+=1;
            } else{
                scrolling = false;
                
                scrollCounter-=1;
                if(scrollCounter <= 0) {
                    scrolling = true;
                }
            }

            let height = scrollCounter*$(scrollItems).outerHeight();

            console.log(scrollCounter,"---scrollItems.height()--",height);
            
            
            scrollDiv.animate({
                scrollTop: height,
            },1000);

            // $(scrollItems).scrollTop(300);
            

        }, 3000);
    }

    $(document).ready(function(){
        
        $('.scrollDiv').each(function(i,j){
            // j = $('.scrollDiv');
            let scrollItems = $(this).find('.p-2');
            scrollingDiv(this,scrollItems);
        });

    });

</script>