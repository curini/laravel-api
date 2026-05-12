# API Laravel — Documentation

## Prérequis

| Outil / Package         | Version |
| ----------------------- | ------- |
| **PHP**                 | 8.3     |
| **Laravel Framework**   | 13.7    |
| **spatie/laravel-data** | 4.23    |

---

## Routes disponibles

### **GET `/api/status`**

Indique si l’API est **opérationnelle** ou en **maintenance**.

---

### **GET `/api/properties/{country}/{state}/{other_info?}`**

Retourne une liste d’annonces en fonction des paramètres fournis.

- `country` — ex: fr
- `state` — ex: vente / location
- `other_info` _(optionnel)_ — filtre supplémentaire ex: maison
- Les données retournées s’appuient sur la configuration définie dans **`config/house.php`**.
