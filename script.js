alert("Selamat Datang di CoffeTwins")
function check()
{
    let cb = document.getElementById('cb').checked;
    if(cb == true)
    {
        document.getElementById('konten').classList.remove('backgorund');
        document.getElementById('konten').classList.add('backgroundDark');
        document.getElementById('kartu').classList.remove('card');
        document.getElementById('kartu').classList.add('cardDark');
    }

    else
    {
        document.getElementById('konten').classList.remove('backgroundDark');
        document.getElementById('konten').classList.add('background');
        // document.getElementById('kartu').classList.remove('cardDark');
        // document.getElementById('kartu').classList.add('card');
    }
}