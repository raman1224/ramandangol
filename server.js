const express = require('express');
const path = require('path');

const app = express();
const PORT = 3000;

// Serve all static files (HTML, CSS, JS, images, PDF)
app.use(express.static(path.join(__dirname)));

// Home page
app.get('/', (req, res) => {
  res.sendFile(path.join(__dirname, 'index.html'));
});

// Download resume route
app.get('/download-resume', (req, res) => {
  const filePath = path.join(__dirname, '(FREE COPY) Raman Dangol Resume.pdf');
  res.download(filePath, 'Raman_Dangol_Resume.pdf', (err) => {
    if (err) {
      console.error('Error downloading resume:', err);
      res.status(500).send('Sorry, file not found or server error.');
    }
  });
});

// Start the server
app.listen(PORT, () => {
  console.log(`✅ Server is running at: http://localhost:${PORT}`);
});
