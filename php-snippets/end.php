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
        <!-- Aufgaben anzeigen lassen-->
        <script>
        document.querySelectorAll('.task-card').forEach(card => {
            card.addEventListener('mouseenter', () => {
                card.querySelector('.task-menu').style.display = 'block';
            });

            card.addEventListener('mouseleave', () => {
                card.querySelector('.task-menu').style.display = 'none';
            });
        });
        </script>



        <!--Buchseiten auf der Personenseite anzeigen lassen -->

        <script>
            const pages = document.querySelectorAll('.book-page');
            const prevBtn = document.getElementById('prevPage');
            const nextBtn = document.getElementById('nextPage');
            const indicator = document.getElementById('pageIndicator');

            let current = 0;

            function updateBook() {
                pages.forEach((p, i) => p.classList.toggle('active', i === current));
                indicator.textContent = `Seite ${current + 1} / ${pages.length}`;
                prevBtn.disabled = current === 0;
                nextBtn.disabled = current === pages.length - 1;
            }

            prevBtn.addEventListener('click', () => {
                if (current > 0) {
                    current--;
                    updateBook();
                }
            });

            nextBtn.addEventListener('click', () => {
                if (current < pages.length - 1) {
                    current++;
                    updateBook();
                }
            });

            updateBook();
        </script>



    </body>
</html>