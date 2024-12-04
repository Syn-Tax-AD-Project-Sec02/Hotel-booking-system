function storeTableDataAndNavigate(event) {
    event.preventDefault();
            const table = document.getElementById('data-table');
            const rows = table.getElementsByTagName('tbody')[0].getElementsByTagName('tr');
            const tableData = [];

            for (let i = 0; i < rows.length; i++) {
                const cells = rows[i].getElementsByTagName('td');
                tableData.push({
                    roomId: cells[0].innerText,
                    name: cells[1].innerText,
                    roomType: cells[2].innerText,
                    arrivalDate: cells[3].innerText,
                    departureDate: cells[4].innerText,
                    amount: cells[5].innerText,
                    status: cells[6].innerText
                });
            }

            localStorage.setItem('tableData', JSON.stringify(tableData));
            window.location.href = '../.../../../../report.html'; // Replace with your invoice page URL
        }