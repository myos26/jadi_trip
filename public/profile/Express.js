const express = require('express');
const request = require('request');
const app = express();

app.get('/api/provinces', (req, res) => {
  request(
    { url: 'https://emsifa.github.io/api-wilayah-indonesia/api/provinces.json' },
    (error, response, body) => {
      if (error || response.statusCode !== 200) {
        return res.status(500).json({ type: 'error', message: err.message });
      }
      res.json(JSON.parse(body));
    }
  );
});

app.listen(3000, () => console.log('Server running on port 3000'));
