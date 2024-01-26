<nav class='absolute top-0 left-0 w-screen bg-slate-300 h-14 grid place-content-center'>
        <div class='flex gap-4'>
            <a href="pages/register.php" class='px-4 py-2 bg-slate-400 rounded-2xl transition-colors hover:bg-slate-200'>Register</a>
            <a href="../index.php" class='px-4 py-2 bg-slate-400 rounded-2xl transition-colors hover:bg-slate-200'>Login</a>
        </div>
    </nav>
<script>
    if (location.href.includes('register.php')) 
    {
    document.querySelector('.flex.gap-4 a').classList.add('hidden')
    } else {
    document.querySelectorAll('.flex.gap-4 a')[1].classList.add('hidden')
    }
</script>