 <div class="header container-fluid">
  <div class="top-row container-fluid p-4">
    <div class="title">
            @if (isset($pageType) && $pageType === 'books')
                <h2><b>Book List</b></h2>
            @elseif (isset($pageType) && $pageType === 'authors')
                <h2><b>Author List</b></h2>
            @elseif (isset($pageType) && $pageType === 'users')
                <h2><b>User</b></h2>
            @elseif (isset($pageType) && $pageType === 'settings')
                <h2><b>Setting</b></h2>
            @else 
                <h2>Book List</h2>
            @endif
        </div>
    <div class="profile">
      <span>Admin</span>
      <a href="{{ route('users.index') }}">
        <img src="{{ asset('book/profile.jpg') }}" alt="">
      </a> 
    </div>
  </div>

    <div class="bottom-row container-fluid p-4">
    <div class="search">
        <input type="text" placeholder="Search..." id="searchInput">
        <button type="submit" id="searchButton">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                    </svg>
        </button>
    </div>
         {{-- Dynamic Create Button --}}
        @if (isset($pageType))
            @php
                $createRoute = '';
                $buttonText = '';
                switch ($pageType) {
                    case 'books':
                        $createRoute = route('books.create');
                        $buttonText = 'Create Book';
                        break;
                    case 'authors':
                        $createRoute = route('authors.create'); // Assuming you have an 'authors.create' route
                        $buttonText = 'Create Author';
                        break;
                    default:
                        $createRoute = '#'; // Fallback
                        $buttonText = 'Create Item';
                        break;
                }
            @endphp
            <a href="{{ $createRoute }}" class="create">{{ $buttonText }}</a>
        @endif
   
  </div>
</div>
<script>
    function performSearch() {
        const searchTerm = document.getElementById('searchInput').value.toLowerCase();
        // Determine which rows and data attributes to search based on pageType
        const pageType = "{{ $pageType ?? 'nothing' }}"; // Pass pageType from Blade to JS

        let rowsSelector = '';
        let primarySearchAttribute = '';
        let secondarySearchAttribute = '';

        switch (pageType) {
            case 'books':
                rowsSelector = '.data-row'; // Use a more general class for table rows
                primarySearchAttribute = 'data-book-title'; // Use data attributes for specific fields
                
                break;
            case 'authors':
                rowsSelector = '.data-row';
                primarySearchAttribute = 'data-author-name';
                
                break;
            default:
                rowsSelector = '.data-row'; // Fallback to a general row selector
                primarySearchAttribute = 'data-search-primary'; // Fallback data attributes
                secondarySearchAttribute = 'data-search-secondary';
                break;
        }

        const rows = document.querySelectorAll(rowsSelector);

        rows.forEach(row => {
            const primaryText = row.getAttribute(primarySearchAttribute) ? row.getAttribute(primarySearchAttribute).toLowerCase() : '';
            const secondaryText = row.getAttribute(secondarySearchAttribute) ? row.getAttribute(secondarySearchAttribute).toLowerCase() : '';

            if (primaryText.includes(searchTerm) || secondaryText.includes(searchTerm)) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        });
    }

    document.getElementById('searchButton').addEventListener('click', (e) => {
        e.preventDefault(); // prevent page reload if inside form
        performSearch();
    });

    document.getElementById('searchInput').addEventListener('input', performSearch);
</script>