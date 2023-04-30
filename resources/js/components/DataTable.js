import React from 'react';
import { DataGrid } from '@mui/x-data-grid';
import ReactDOM from 'react-dom';

const columns = [
  { field: 'id', headerName: 'ID', width: 70 },
  { field: 'name', headerName: 'Full name', width: 130 },
  { field: 'emailAddress', headerName: 'Email Address', width: 130 },
  {field: 'fullName', headerName: 'Full name', description: 'This column has a value getter and is not sortable.',
    sortable: false,
    width: 160,
    valueGetter: (params) =>
      `${params.row.firstName || ''} ${params.row.lastName || ''}`,
  },
];

const rows = [
  { id: 1, name: 'Snow',  emailAddress: 35 },
  { id: 2, name: 'Lannister',  emailAddress: 42 },
  { id: 3, name: 'Lannister', emailAddress: 45 },
  { id: 4, name: 'Stark',  emailAddress: 16 },
  { id: 5, name: 'Targaryen',  emailAddress: null },
  { id: 6, name: 'Melisandre',  emailAddress: 150 },
  { id: 7, name: 'Clifford', emailAddress: 44 },
  { id: 8, name: 'Frances',  emailAddress: 36 },
  { id: 9, name: 'Roxie',  emailAddress: 65 },
];

function DataTable() {
  return (
    <div style={{ height: 400, width: '100%' }}>
      <DataGrid
        rows={rows}
        columns={columns}
        paginationModel={{ page: 0, pageSize: 10 }}
        checkboxSelection
      />
    </div>
  );
}

if (document.getElementById('table')) {
  ReactDOM.render(<DataTable />, document.getElementById('table'));
}
