<script src="https://kit.fontawesome.com/1467b92032.js" crossorigin="anonymous"></script>
<script>
    const openPopUp = document.getElementById('open_pop_up');
    const openPopUp1 = document.getElementById('open_pop_up_1');
    const openPopUp2 = document.getElementById('open_pop_up_2');
    const closePopUp = document.getElementById('pop_up_close');
    const popUp = document.getElementById('pop_up');
    const openResponse = document.getElementById('open_response');
    const response = document.getElementById('response');
    openPopUp.addEventListener('click', function (e){
        e.preventDefault();
        popUp.classList.add('active');

    })
    openPopUp1.addEventListener('click', function (e){
        e.preventDefault();
        popUp.classList.add('active');

    })
    openPopUp2.addEventListener('click', function (e){
        e.preventDefault();
        popUp.classList.add('active');

    })

    closePopUp.addEventListener('click', () => {
        popUp.classList.remove('active');
        response.classList.remove('active');
    })
</script>
</body>
</html>
