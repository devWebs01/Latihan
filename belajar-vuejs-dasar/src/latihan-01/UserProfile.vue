<script setup>
// Data untuk latihan
const user = {
  firstName: 'John',
  lastName: 'Doe',
  avatarUrl: 'https://vuejs.org/images/logo.png', // Ganti dengan URL gambar jika Anda mau
  profileUrl: 'https://vuejs.org/',
  status: 'offline', // Coba ganti menjadi 'offline'
  bioHtml: 'Saya seorang <i>Software Engineer</i> yang suka <b>Vue.js</b>.'

};

function getFullName() {
  return `${user.firstName} ${user.lastName}`;
}
</script>

<template>
  <div class="profile-card">
    <!-- TUGAS 1: Tampilkan gambar avatar di bawah ini.
         - Gunakan v-bind (atau shorthand :) untuk menghubungkan `user.avatarUrl` ke atribut `src`.
         - Hubungkan juga `user.firstName` ke atribut `alt`. -->
    <img class="avatar" v-bind:src="user.avatarUrl" v-bind:alt="user.firstName">

    <!-- TUGAS 2: Tampilkan nama lengkap pengguna.
         - Gunakan text interpolation {{ }} untuk menampilkan nama dari fungsi getFullName(). -->
    <h1>{{ getFullName() }}</h1>

    <!-- TUGAS 3: Tampilkan status pengguna (Online/Offline).
         - Gunakan v-bind untuk memberikan class 'online' jika status 'online', dan 'offline' jika status 'offline'.
         - Tampilkan juga teks statusnya di dalam <span>. -->
    <p>Status: <span v-bind:class="{ online: user.status === 'online', offline: user.status === 'offline' }">{{
      user.status }}</span></p>

    <!-- TUGAS 4: Tampilkan bio pengguna.
         - Gunakan v-html untuk merender `user.bioHtml` di dalam div di bawah ini. -->
    <div class="bio" v-html="user.bioHtml"></div>

    <!-- TUGAS 5: Buat link ke profil pengguna.
         - Gunakan tag <a> dan hubungkan `user.profileUrl` ke atribut `href`. -->
    <a v-bind:href="user.profileUrl">Lihat Profil</a>
  </div>
</template>

<style scoped>
.profile-card {
  font-family: sans-serif;
  border: 1px solid #ccc;
  border-radius: 8px;
  padding: 20px;
  max-width: 300px;
  margin: 20px auto;
  text-align: center;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.avatar {
  width: 100px;
  height: 100px;
  border-radius: 50%;
  border: 3px solid #42b883;
}

.status {
  font-weight: bold;
}

.online {
  color: green;
}

.offline {
  color: red;
}

.bio {
  margin-top: 15px;
  font-size: 0.9em;
  color: #555;
}

a {
  display: inline-block;
  margin-top: 15px;
  color: #42b883;
  text-decoration: none;
}
</style>
