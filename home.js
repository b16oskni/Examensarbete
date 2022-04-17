
document.getElementById('btnCi').addEventListener('click', redirect('ci'));
document.getElementById('btnSf').addEventListener('click', redirect('sf'));

function redirect(framework) {
    if(framework === 'ci'){
        location.assign("codeigniterApp/public/");
    }else if(framework === 'sf') {
        location.assign("symfonyApp/public/");
    }
}