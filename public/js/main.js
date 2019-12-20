$.ajax({
    url: "https://randomuser.me/api/",
    success: function (data) {
        console.log(data.results[0]);
        const months = ['january', 'february', 'march', 'mey', 'june', 'july', 'august', ];
        const basic = data.results[0];
        const profile = {
            location: basic.location.coordinates,
            country: basic.location.country,
            postcode: basic.location.postcode,
            street: basic.location.street,
            state: basic.location.state,
            city: basic.location.city,
            avatar: basic.picture.large,
            phone: basic.phone,
            email: basic.email,
            dob: basic.dob.date,
            gender: basic.gender,
            firstName: basic.name.first,
            lastName: basic.name.last,
            fullname() {
                return this.firstName + ' ' + this.lastName;
            },
            formatDate: function (date) {
                var monthNames = [
                    "January", "February", "March",
                    "April", "May", "June", "July",
                    "August", "September", "October",
                    "November", "December"
                ];
                date = new Date(date);
                var day = date.getDate();
                var monthIndex = date.getMonth();
                var year = date.getFullYear();

                return day + ' ' + monthNames[monthIndex] + ' ' + year;
            },
            fullAddress() {
                return `${this.street.name} No ${this.street.number}, ${this.state} ${this.city} ${this.postcode}, ${this.country}`;
            }
        }

        $('#map').attr('src', `https://www.google.com/maps/embed/v1/view?key=AIzaSyDgpyWc__ybz2NQZyQ7zWYyFl717jCKYA0&center=${profile.location.latitude},${profile.location.longitude}&zoom=7`);

        $('#avatar img').attr('src', profile.avatar);
        $('#avatarName').text(profile.fullname());
        $('#avatarCountry').text(profile.country);
        $('#mobile').text(profile.phone);
        $('#email').text(profile.email);
        $('#dob').text(profile.formatDate(profile.dob));
        $('#gender').text(profile.gender);
        $('#address').text(profile.fullAddress());
        $('.spinner').hide();
        $('main').fadeIn();
    }
});
