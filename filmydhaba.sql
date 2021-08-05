-- Database: `filmydhaba`

-- --------------------------------------------------------

--
-- Table structure for table `pdregistration`
--

CREATE TABLE `pdregistration` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pdupload`
--

CREATE TABLE `pdupload` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `filmname` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `udregistration`
--

CREATE TABLE `udregistration` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pdregistration`
--
ALTER TABLE `pdregistration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pdupload`
--
ALTER TABLE `pdupload`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `udregistration`
--
ALTER TABLE `udregistration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pdregistration`
--
ALTER TABLE `pdregistration`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pdupload`
--
ALTER TABLE `pdupload`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `udregistration`
--
ALTER TABLE `udregistration`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
COMMIT;
