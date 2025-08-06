import './bootstrap';


//------swiper-------//
var swiper = new Swiper(".mySwiper", {
    cssMode: true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    pagination: {
        el: ".swiper-pagination",
    },
    mousewheel: true,
    keyboard: true,
});


//--------MobileMenu--------//

document.addEventListener('DOMContentLoaded', function () {
    const mobileMenuButton = document.getElementById('mobileMenuButton');
    const mobileMenu = document.getElementById('mobileMenu');
    const navbar = document.querySelector('nav');

    const originalShadow = 'shadow-[0_1px_25px_rgba(0,0,0,0.1)]';

    mobileMenuButton.addEventListener('click', function () {
        const isOpening = mobileMenu.classList.contains('hidden');

        if (isOpening) {
            navbar.classList.remove(originalShadow);
            navbar.classList.add('shadow-none');
            document.body.style.overflow = 'hidden';
        } else {
            navbar.classList.remove('shadow-none');
            navbar.classList.add(originalShadow);
            document.body.style.overflow = '';
        }

        mobileMenu.classList.toggle('hidden');
    });
});



//-----------Calendar-------//


// Add this script at the end of your file, before </x-layout>

document.addEventListener('DOMContentLoaded', function () {
    const calendarContainer = document.getElementById('calendarContainer');
    const datePickerBtn = document.getElementById('datePickerBtn');
    const selectedDateDisplay = document.getElementById('selectedDateDisplay');
    const calendarDays = document.getElementById('calendarDays');
    const dateText = document.getElementById('date');
    let currentDate = new Date();
    let selectedDate = null;

    // Toggle calendar visibility
    datePickerBtn.addEventListener('click', () => {
        calendarContainer.classList.toggle('hidden');
        if (!calendarContainer.classList.contains('hidden')) {
            generateCalendar(currentDate);
        }
    });

    // Close calendar when clicking outside
    document.addEventListener('click', (e) => {
        if (!calendarContainer.contains(e.target) && !datePickerBtn.contains(e.target)) {
            calendarContainer.classList.add('hidden');
        }
    });

    // Handle date selection
    calendarDays.addEventListener('click', (e) => {
        if (e.target.classList.contains('calendar-day')) {
            const date = new Date(e.target.dataset.date);
            selectedDate = date;
            selectedDateDisplay.textContent = date.toLocaleDateString('en-US', {
                month: 'long',
                day: 'numeric',
                year: 'numeric'
            });
            calendarContainer.classList.add('hidden');
        }
    });

    // Previous month button
    document.getElementById('prevMonth').addEventListener('click', () => {
        currentDate.setMonth(currentDate.getMonth() - 1);
        generateCalendar(currentDate);
    });

    // Next month button
    document.getElementById('nextMonth').addEventListener('click', () => {
        currentDate.setMonth(currentDate.getMonth() + 1);
        generateCalendar(currentDate);
    });

    function generateCalendar(date) {
        const monthYear = document.getElementById('monthYear');
        const firstDay = new Date(date.getFullYear(), date.getMonth(), 1);
        const lastDay = new Date(date.getFullYear(), date.getMonth() + 1, 0);

        monthYear.textContent = date.toLocaleDateString('en-US', {
            month: 'long',
            year: 'numeric'
        });

        let daysHTML = '';
        // Add empty cells for days before the first day of the month
        for (let i = 0; i < (firstDay.getDay() || 7) - 1; i++) {
            daysHTML += '<div></div>';
        }

        // Add the days of the month
        for (let day = 1; day <= lastDay.getDate(); day++) {
            const currentDay = new Date(date.getFullYear(), date.getMonth(), day);
            const isSelected = selectedDate && currentDay.toDateString() === selectedDate.toDateString();
            const isToday = currentDay.toDateString() === new Date().toDateString();

            daysHTML += `
                <div 
                    class="calendar-day cursor-pointer p-2 hover:bg-gray-100 rounded-full
                    ${isSelected ? 'bg-orange-500 text-white hover:bg-orange-600' : ''}
                    ${isToday ? 'border border-orange-500' : ''}"
                    data-date="${currentDay.toISOString()}"
                >
                    ${day}
                </div>
            `;
        }

        calendarDays.innerHTML = daysHTML;

        calendarDays.addEventListener('click', (e) => {
            if (e.target.classList.contains('calendar-day')) {
                const date = new Date(e.target.dataset.date);
                selectedDate = date;

                // Format date for display (Month DD, YYYY)
                const displayDate = date.toLocaleDateString('en-US', {
                    month: 'long',
                    day: 'numeric',
                    year: 'numeric'
                });

                // Format date for backend (YYYY-MM-DD)
                const backendDate = `${date.getFullYear()}-${String(date.getMonth() + 1).padStart(2, '0')}-${String(date.getDate()).padStart(2, '0')}`;

                // Update the visible text
                selectedDateDisplay.textContent = displayDate;

                // Add a hidden input field if you don't already have one
                let hiddenDateInput = document.getElementById('hidden-date-input');
                if (!hiddenDateInput) {
                    hiddenDateInput = document.createElement('input');
                    hiddenDateInput.type = 'hidden';
                    hiddenDateInput.id = 'hidden-date-input';
                    hiddenDateInput.name = 'selected_date';
                    datePickerBtn.parentNode.appendChild(hiddenDateInput);

                }
                hiddenDateInput.value = backendDate;
                dateText.textContent = "Selected date";
                calendarContainer.classList.add('hidden');
            }
        });

    }
});


//------travellers------//

document.addEventListener('DOMContentLoaded', function () {
    const travelersBtn = document.getElementById('travelersBtn');
    const travelersDropdown = document.getElementById('travelersDropdown');
    const travelersCount = document.getElementById('travelersCount');
    const incrementBtns = document.querySelectorAll('.incrementBtn');
    const decrementBtns = document.querySelectorAll('.decrementBtn');

    let counts = {
        adults: 2,
        children: 0
    };

    // Toggle travelers dropdown
    travelersBtn.addEventListener('click', (e) => {
        e.stopPropagation();
        travelersDropdown.classList.toggle('hidden');
    });

    // Add Apply button handler
    const applyTravelersBtn = document.getElementById('applyTravelers');
    applyTravelersBtn.addEventListener('click', () => {
        travelersDropdown.classList.add('hidden');
    });
    // Modify click outside handler to exclude the Apply button
    document.addEventListener('click', (e) => {
        if (!travelersDropdown.contains(e.target) &&
            !travelersBtn.contains(e.target) &&
            !applyTravelersBtn.contains(e.target)) {
            travelersDropdown.classList.add('hidden');
        }
    });

    // Increment and decrement buttons
    incrementBtns.forEach(btn => {
        btn.addEventListener('click', (e) => {
            const type = btn.dataset.type;
            if (type === 'adults' && counts[type] < 9) {
                counts[type]++;
            } else if (type === 'children' && counts[type] < 8) {
                counts[type]++;
            }
            updateCounts();
        });
    });

    decrementBtns.forEach(btn => {
        btn.addEventListener('click', (e) => {
            const type = btn.dataset.type;
            if (type === 'adults' && counts[type] > 1) {
                counts[type]--;
            } else if (type === 'children' && counts[type] > 0) {
                counts[type]--;
            }
            updateCounts();
        });
    });

    function updateCounts() {
        document.getElementById('adultsCount').textContent = counts.adults;
        document.getElementById('childrenCount').textContent = counts.children;
        const total = counts.adults + counts.children;
        travelersCount.textContent = `${total} ${total === 1 ? 'Adult' : 'Participants'}`;
    }
});

