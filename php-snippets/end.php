        <!-- Bootstrap Bundle mit Popper -->
        <script src="/js/bootstrap.bundle.min.js"></script>
        <!-- Eigene JS Logik -->
        <script src="/js/background.js"></script>
        <script src="/js/intro.js"></script>


        <script>
            document.addEventListener("DOMContentLoaded", () => {
                const observer = new IntersectionObserver(entries => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add("visible");
                            observer.unobserve(entry.target);
                        }
                    });
                }, {
                    threshold: 0.15
                });

                document.querySelectorAll(".fade-in").forEach(el => {
                    observer.observe(el);
                });
            });
        </script>

        <script>
            document.querySelectorAll('.person-summary').forEach(card => {
                card.addEventListener('click', () => {
                    card.closest('.person-card').classList.toggle('active');
                });
            });
        </script>


    </body>
</html>