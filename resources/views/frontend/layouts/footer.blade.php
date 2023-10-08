

<script src="{{url('frontend/js/script.js')}}"></script>

<script>
    $(document).ready(function(){
        $("#messageContainer").scrollTop($("#messageContainer")[0].scrollHeight);
        $('#messageSent').on('submit',function(e){
            e.preventDefault();
            jQuery.ajax({
                url:"{{url('/message-sent')}}",
                data:jQuery('#messageSent').serialize(),
                type:'post',
                
                success:function(response)
                {
                    $("#messageContainer").scrollTop($("#messageContainer")[0].scrollHeight);
                    jQuery('#messageSent')[0].reset();
                }
            });


        });

            function fetchData() {
            var id = {{request('id')}};
            $.ajax({
            type: 'GET',
            url: '/chat/'+id, // Replace with your actual server endpoint
            success: function (data) {
                $('#messageContainer').empty();
                $.each(data.messages, function(key,item){
                    var messageClass = item.user_id === {{session('user_id')}}? 'bg-dark': 'bg-secondary';
                    var messageStyle = item.user_id === {{session('user_id')}}? 'margin-left:auto;': '';
                    $('#messageContainer').append('<div class="message '+messageClass+' px-2 py-1 mb-3  mt-3 rounded " style="width:max-content;'+messageStyle+'max-width:75%;">\
                        <p class="text-center text-white">'+item.message+'</p>\
                        </div>');
                });
            },
            error: function (xhr, status, error) {
            console.error('Error fetching data:', error);
            }
            });
            }

            // Call the fetchData function initially
            fetchData();

            // Set up a recurring timer to fetch data every 3 seconds (3000 milliseconds)
            setInterval(fetchData, 3000);


    });
</script>
</body>
</html>