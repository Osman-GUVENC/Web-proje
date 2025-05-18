document.addEventListener("DOMContentLoaded", function () {
  const app = new Vue({
    el: "#app",
    data: {
      ad: "",
      soyad: "",
      email: "",
      telefon: "",
      mesaj: "",
      hataMesaji: ""
    },
    methods: {
      kontrolEtJS() {
        if (
          this.ad === "" ||
          this.soyad === "" ||
          this.email === "" ||
          this.telefon === "" ||
          this.mesaj === ""
        ) {
          this.hataMesaji = "Lütfen tüm alanları doldurun.";
          return;
        }
        if (!/^[0-9]+$/.test(this.telefon)) {
          this.hataMesaji = "Telefon sadece rakamlardan oluşmalıdır.";
          return;
        }
        if (!this.email.includes("@")) {
          this.hataMesaji = "Geçerli bir email girin.";
          return;
        }
        this.hataMesaji = "";
        document.forms["iletisimForm"].submit();
      },
      kontrolEtVue() {
        alert("Vue.js doğrulama başarılıysa bir sonraki adıma geçebilirsiniz!");
      }
    }
  });
});
