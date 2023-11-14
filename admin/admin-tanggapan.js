// Filter table by search input
const searchInput = document.querySelector('#search-input');
searchInput.addEventListener('input', function() {
  const rows = document.querySelectorAll('tbody tr');
  rows.forEach(row => {
    const text = row.textContent.toLowerCase();
    if (!text.includes(searchInput.value.toLowerCase())) {
      row.hidden = true;
    } else {
      row.hidden = false;
    }
  });
});

// Sort table by column header
const tableHeaders = document.querySelectorAll('thead th');
tableHeaders.forEach(header => {
  header.addEventListener('click', function() {
    const rows = document.querySelectorAll('tbody tr');
    rows.sort((a, b) => {
      const aValue = a.querySelector(`td:nth-child(${header.cellIndex + 1})`).textContent;
      const bValue = b.querySelector(`td:nth-child(${header.cellIndex + 1})`).textContent;
      return aValue.localeCompare(bValue);
    });
    rows.forEach(row => {
      document.querySelector('tbody').appendChild(row);
    });
  });
});
