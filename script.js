const express = require('express');
const bodyParser = require('body-parser');
const app = express();

app.use(bodyParser.json());

app.post('/api/saveData', (req, res) => {
    // Ambil data dari request
    const inputData = req.body.inputData;

    // Simpan data ke dalam database
    // (Contoh: menggunakan MySQL)
    // Database logic di sini...

    res.json({ success: true, message: 'Data saved successfully' });
});

app.listen(3000, () => {
    console.log('Server is running on port 3000');
});
