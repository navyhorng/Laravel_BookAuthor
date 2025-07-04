<div class="content-area">
            <div class="search-bar-container">
                <div class="input-group search-input-group">
                    <!-- Added id for JavaScript access -->
                    <input type="text" class="form-control" placeholder="Search by book title, category, or author..." aria-label="Search" id="searchInput">
                    <button class="btn" type="button"><i class="fas fa-search"></i></button>
                </div>
                <button class="btn create-book-btn">Create Book</button>
            </div>

            <div class="table-responsive">
                <table class="table table-hover" id="booksTable">
                    <thead>
                        <tr>
                            <th scope="col">ITEM</th>
                            <th scope="col">CATEGORY</th>
                            <th scope="col">AUTHOR</th>
                            <th scope="col"></th> <!-- For action buttons -->
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="book-item">
                                    <img src="https://placehold.co/50x70/e0e0e0/333333?text=Book" alt="Book Cover">
                                    <span class="book-title">The Little Lady of the Big House</span>
                                </div>
                            </td>
                            <td>
                                <span class="category-badge">Psychological</span>
                                <span class="category-badge">Romance</span>
                            </td>
                            <td>Jack London</td>
                            <td class="action-buttons">
                                <button class="btn"><i class="fas fa-pen"></i></button>
                                <button class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="book-item">
                                    <img src="https://placehold.co/50x70/e0e0e0/333333?text=Book" alt="Book Cover">
                                    <span class="book-title">The Wonderful Wizard of Oz</span>
                                </div>
                            </td>
                            <td>
                                <span class="category-badge">Fantasy</span>
                                <span class="category-badge">Fantasy & Magic</span>
                            </td>
                            <td>Lyman Frank Baum</td>
                            <td class="action-buttons">
                                <button class="btn"><i class="fas fa-pen"></i></button>
                                <button class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="book-item">
                                    <img src="https://placehold.co/50x70/e0e0e0/333333?text=Book" alt="Book Cover">
                                    <span class="book-title">Peter and Wendy</span>
                                </div>
                            </td>
                            <td>
                                <span class="category-badge">Fantasy</span>
                                <span class="category-badge">Fairy Tales & Folklore</span>
                                <span class="category-badge">Fantasy & Magic</span>
                            </td>
                            <td>James Matthew Barrie</td>
                            <td class="action-buttons">
                                <button class="btn"><i class="fas fa-pen"></i></button>
                                <button class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="book-item">
                                    <img src="https://placehold.co/50x70/e0e0e0/333333?text=Book" alt="Book Cover">
                                    <span class="book-title">Anna Karenina</span>
                                </div>
                            </td>
                            <td>
                                <span class="category-badge">Classics</span>
                                <span class="category-badge">Literary</span>
                                <span class="category-badge">Psychological</span>
                                <span class="category-badge">Romance</span>
                                <span class="category-badge">Social Life</span>
                            </td>
                            <td>Graf Leo Tolstoy</td>
                            <td class="action-buttons">
                                <button class="btn"><i class="fas fa-pen"></i></button>
                                <button class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="book-item">
                                    <img src="https://placehold.co/50x70/e0e0e0/333333?text=Book" alt="Book Cover">
                                    <span class="book-title">The Sea Wolf</span>
                                </div>
                            </td>
                            <td>
                                <span class="category-badge">Action & Adventure</span>
                                <span class="category-badge">Sea Stories</span>
                            </td>
                            <td>Jack London</td>
                            <td class="action-buttons">
                                <button class="btn"><i class="fas fa-pen"></i></button>
                                <button class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="book-item">
                                    <img src="https://placehold.co/50x70/e0e0e0/333333?text=Book" alt="Book Cover">
                                    <span class="book-title">Jane Eyre</span>
                                </div>
                            </td>
                            <td>
                                <span class="category-badge">Psychological</span>
                                <span class="category-badge">Gothic</span>
                                <span class="category-badge">Biographical</span>
                                <span class="category-badge">Stories For Girls</span>
                            </td>
                            <td>Charlotte Bronte</td>
                            <td class="action-buttons">
                                <button class="btn"><i class="fas fa-pen"></i></button>
                                <button class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="pagination-container">
                <div class="items-per-page">
                    <span>View</span>
                    <select class="form-select w-auto">
                        <option value="6" selected>6</option>
                        <option value="10">10</option>
                        <option value="20">20</option>
                    </select>
                    <span>items per page</span>
                </div>
                <div class="pagination-info">
                    <span>&lt;&lt; Page 2 of 167 &gt;&gt;</span>
                </div>
                <nav aria-label="Page navigation" class="pagination-controls">
                    <ul class="pagination">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const searchInput = document.getElementById('searchInput');
            const booksTable = document.getElementById('booksTable');
            const tableRows = booksTable.getElementsByTagName('tbody')[0].getElementsByTagName('tr');

            searchInput.addEventListener('keyup', function() {
                const searchTerm = searchInput.value.toLowerCase(); // Get search term and convert to lowercase

                for (let i = 0; i < tableRows.length; i++) {
                    const row = tableRows[i];
                    // Get all text content from the row and convert to lowercase
                    const rowText = row.textContent.toLowerCase();

                    // Check if the row text contains the search term
                    if (rowText.includes(searchTerm)) {
                        row.style.display = ''; // Show the row
                    } else {
                        row.style.display = 'none'; // Hide the row
                    }
                }
            });
        });
    </script>