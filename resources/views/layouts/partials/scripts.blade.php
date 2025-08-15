<script>
    document.addEventListener('DOMContentLoaded', function() {
        const links = document.querySelectorAll('a.nav-link');
        const currentUrl = window.location.pathname.replace(/\/$/, '');
        links.forEach(link => {
            const linkUrl = link.pathname.replace(/\/$/, '');
            if (linkUrl === currentUrl) {
                link.classList.add('active');
            }
        });
    });
    window.addEventListener('scroll', () => {
        const nav = document.getElementById('nav-desktop');
        if (window.scrollY > 200) {
            nav.classList.add('bg-white-mode');
            nav.classList.remove('bg-dark-mode');
        } else {
            nav.classList.add('bg-dark-mode');
            nav.classList.remove('bg-white-mode');
        }
    });
</script>
